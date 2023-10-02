CREATE TABLE todo_table (
    todoNum int NOT NULL auto_increment,
    memberID CHAR(30) NOT NULL,
    todo CHAR(50),
    PRIMARY KEY(todoNum),
    CONSTRAINT FK FOREIGN KEY(memberID) REFERENCES member_table(memberID) ON DELETE CASCADE
);