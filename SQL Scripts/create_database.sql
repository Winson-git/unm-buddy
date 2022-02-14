DROP DATABASE IF EXISTS unm_buddy;
CREATE DATABASE unm_buddy;
USE unm_buddy;

CREATE TABLE role (
    role_id INT AUTO_INCREMENT,
    name VARCHAR(10) UNIQUE,
    PRIMARY KEY(role_id)
);

CREATE TABLE address (
    address_id INT,
    address VARCHAR(255),
    city VARCHAR(31),
    postal_code CHAR(5),
    state VARCHAR(30),
    PRIMARY KEY(address_id)
);

CREATE TABLE emergency_contact (
    contact_id INT,
    name VARCHAR(63),
    relationship VARCHAR(10),
    email VARCHAR(50),
    phone_number VARCHAR(15),
    PRIMARY KEY(contact_id)
);

CREATE TABLE unm_user (
    user_id INT AUTO_INCREMENT,
    role_id INT,
    first_name VARCHAR(50),
    last_name VARCHAR(50),
    gender BOOLEAN,
    date_of_birth DATE,
    personal_email VARCHAR(50),
    uni_email VARCHAR(50),
    phone_number VARCHAR(15),
    picture VARCHAR(255),
    username VARCHAR(10),
    password VARCHAR(255),
    address_id INT,
    emergency_contact_id INT,
    course_id INT,
    active_status BOOLEAN,
    PRIMARY KEY(user_id),
    FOREIGN KEY(role_id) REFERENCES role(role_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(address_id) REFERENCES address(address_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(emergency_contact_id) REFERENCES emergency_contact(contact_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE faculty (
    faculty_id INT,
    faculty_code VARCHAR(12),
    name VARCHAR(63),
    PRIMARY KEY(faculty_id)
);

CREATE TABLE school (
    school_id INT,
    school_code VARCHAR(12),
    name VARCHAR(63),
    faculty_id INT,
    PRIMARY KEY(school_id),
    FOREIGN KEY(faculty_id) REFERENCES faculty(faculty_id)
);

CREATE TABLE course_level (
    level_id INT,
    type VARCHAR(12),
    PRIMARY KEY(level_id)
);

CREATE TABLE course_mode (
    mode_id INT,
    type VARCHAR(12),
    PRIMARY KEY(mode_id)
);

CREATE TABLE course_intake (
    intake_id INT,
    month VARCHAR(10),
    PRIMARY KEY(intake_id)
);

CREATE TABLE course (
    course_id INT,
    course_code VARCHAR(12),
    name VARCHAR(63),
    level_id INT,
    school_id INT,
    faculty_id INT,
    mode_id INT,
    duration INT,
    intake_id INT,
    year YEAR,
    fee INT,
    PRIMARY KEY(course_id),
    FOREIGN KEY(level_id) REFERENCES course_level(level_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(school_id) REFERENCES school(school_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(faculty_id) REFERENCES faculty(faculty_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(mode_id) REFERENCES course_mode(mode_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(intake_id) REFERENCES course_intake(intake_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

ALTER TABLE unm_user
ADD FOREIGN KEY(course_id)
REFERENCES course(course_id)
ON DELETE RESTRICT
ON UPDATE CASCADE;

CREATE TABLE enrolment (
    enrolment_id INT,
    type VARCHAR(12),
    PRIMARY KEY(enrolment_id)
);

CREATE TABLE semester (
    semester_id INT,
    type VARCHAR(10),
    PRIMARY KEY(semester_id)
);

CREATE TABLE module (
    module_id INT,
    module_code VARCHAR(12),
    name VARCHAR(63),
    enrolment_id INT,
    course_id INT,
    semester_id INT,
    credit INT,
    PRIMARY KEY(module_id),
    FOREIGN KEY(enrolment_id) REFERENCES enrolment(enrolment_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(course_id) REFERENCES course(course_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(semester_id) REFERENCES semester(semester_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE user_module (
    user_id INT,
    module_id INT,
    PRIMARY KEY(user_id, module_id),
    FOREIGN KEY(user_id) REFERENCES unm_user(user_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(module_id) REFERENCES module(module_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE timetable (
    timetable_id INT,
    day VARCHAR(10),
    start_time TIME,
    end_time TIME,
    PRIMARY KEY(timetable_id)
);

CREATE TABLE classmodule (
    module_id INT,
    description TEXT,
    materials TEXT,
    timetable_id INT,
    PRIMARY KEY(module_id),
    FOREIGN KEY(module_id) REFERENCES module(module_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(timetable_id) REFERENCES timetable(timetable_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE submission (
    submission_id INT,
    user_id INT,
    module_id INT,
    title VARCHAR(63),
   	description VARCHAR(255),
    attempt INT,
    submission_status BOOLEAN,
    grading_status BOOLEAN,
    start_date DATETIME,
    due_date DATETIME,
    file VARCHAR(255),
    feedback VARCHAR(255),
    PRIMARY KEY(submission_id),
    FOREIGN KEY(user_id) REFERENCES unm_user(user_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(module_id) REFERENCES module(module_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE notification (
    notification_id INT,
    author INT,
    text VARCHAR(255),
    datetime_sent DATETIME,
    PRIMARY KEY(notification_id),
    FOREIGN KEY(author) REFERENCES unm_user(user_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE notification_user (
    notification_id INT,
    user_id INT,
    PRIMARY KEY(notification_id),
    FOREIGN KEY(notification_id) REFERENCES notification(notification_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(user_id) REFERENCES unm_user(user_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE usergroup (
    group_id INT,
    name VARCHAR (63),
    PRIMARY KEY(group_id)
);

CREATE TABLE user_group (
    user_id INT,
    group_id INT,
    PRIMARY KEY(user_id, group_id),
    FOREIGN KEY(user_id) REFERENCES unm_user(user_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(group_id) REFERENCES usergroup(group_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE notification_group (
    notification_id INT,
    group_id INT,
    PRIMARY KEY(notification_id, group_id),
    FOREIGN KEY(notification_id) REFERENCES notification(notification_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(group_id) REFERENCES usergroup(group_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE newsletter (
    newsletter_id INT,
    title VARCHAR(63),
    author INT,
    date_published DATE,
    body TEXT,
    PRIMARY KEY(newsletter_id),
    FOREIGN KEY(author) REFERENCES unm_user(user_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE newscategory (
    category_id INT,
    name VARCHAR(20),
    PRIMARY KEY(category_id)
);

CREATE TABLE news_category (
    newsletter_id INT,
    category_id INT,
    PRIMARY KEY(newsletter_id, category_id),
    FOREIGN KEY(newsletter_id) REFERENCES newsletter(newsletter_id) ON DELETE RESTRICT ON UPDATE CASCADE,
    FOREIGN KEY(category_id) REFERENCES newscategory(category_id) ON DELETE RESTRICT ON UPDATE CASCADE
);

CREATE TABLE report (
    report_id INT,
    title VARCHAR(63),
    text TEXT,
    datetime_reported DATETIME,
    PRIMARY KEY(report_id)
);
