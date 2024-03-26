CREATE TABLE logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    page_url VARCHAR(255),
    referrer_url VARCHAR(255),
    user_ip_address VARCHAR(45),
    user_agent TEXT,
    created DATETIME,
    userid INT,
    time_spent INT
);
