CREATE TABLE Patient_Data (
    patient_ID INT PRIMARY KEY AUTO_INCREMENT,
    Name VARCHAR(100) NOT NULL,
    date_of_birth DATE NOT NULL
);

CREATE TABLE Treatment_Records (
    treatment_record_ID INT PRIMARY KEY AUTO_INCREMENT,
    patient_ID INT NOT NULL,
    date DATE NOT NULL,
    FOREIGN KEY (patient_ID) REFERENCES Patient_Data(patient_ID)
);

CREATE TABLE Laboratory_Tests (
    test_ID INT PRIMARY KEY AUTO_INCREMENT,
    test_result TEXT,
    date DATE NOT NULL
);

CREATE TABLE Facility_Operations (
    facility_ID INT PRIMARY KEY AUTO_INCREMENT,
    facility_name VARCHAR(100) NOT NULL,
    date DATE NOT NULL
);

CREATE TABLE Resource_Management (
    facility_ID INT,
    resource_type VARCHAR(50) NOT NULL,
    quantity INT NOT NULL,
    PRIMARY KEY (resource_type),
    FOREIGN KEY (facility_ID) REFERENCES Facility_Operations(facility_ID)
);
