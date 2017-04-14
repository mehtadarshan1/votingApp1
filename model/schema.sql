DROP TABLE IF EXISTS voters1 CASCADE;

-- Voter Details
CREATE TABLE voters1 (
username VARCHAR(50) PRIMARY KEY,
passwd VARCHAR(50) NOT NULL,
vote VARCHAR(50) NOT NULL
);

INSERT INTO voters1 (username, passwd) VALUES
('darshan', '1234', 'no'),
('ramy', '1234', 'no'),
('mo', '1234', 'no'),
('raj', '1234','no');
