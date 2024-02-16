-- one data upload
INSERT INTO
    student (
        'id', 'name', 'class', 'roll', 'admission_date'
    )
VALUES (
        NULL, 'myName', 'Eliven', 30, CURRENT_TIMESTAMP
    )

-- Multipul Data Upload ADD

INSERT INTO
    student (
        'id', 'name', 'class', 'roll', 'admission_date'
    )
VALUES (NULL, 'myName', 'Eliven', 30, CURRENT_TIMESTAMP),
        ( NULL, 'myName', 'Eliven', 30, CURRENT_TIMESTAMP ),
        ( NULL, 'myName', 'Eliven', 30, CURRENT_TIMESTAMP ),