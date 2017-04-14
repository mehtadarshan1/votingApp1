DROP TABLE IF EXISTS voters1 CASCADE;

-- Voter Details
CREATE TABLE voters1 (
username VARCHAR(50) PRIMARY KEY,
passwd VARCHAR(50) NOT NULL,
);

INSERT INTO voters1 VALUES
("darshan", "1234"),
("raj", "1234"),
("ramy", "1234"),
("mo", "1234");
