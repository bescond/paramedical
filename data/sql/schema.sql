CREATE TABLE consultant (id BIGINT AUTO_INCREMENT, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, job VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE event (id BIGINT AUTO_INCREMENT, date datetime NOT NULL, title VARCHAR(255) NOT NULL, descritpion TEXT, patient_id BIGINT NOT NULL, consultant_id BIGINT, INDEX patient_id_idx (patient_id), INDEX consultant_id_idx (consultant_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE patient (id BIGINT AUTO_INCREMENT, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, birthdate DATE, address TEXT, zip VARCHAR(5), city VARCHAR(255), PRIMARY KEY(id)) ENGINE = INNODB;
ALTER TABLE event ADD CONSTRAINT event_patient_id_patient_id FOREIGN KEY (patient_id) REFERENCES patient(id) ON DELETE CASCADE;
ALTER TABLE event ADD CONSTRAINT event_consultant_id_consultant_id FOREIGN KEY (consultant_id) REFERENCES consultant(id) ON DELETE CASCADE;
