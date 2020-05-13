set -e
psql -U admin admin << EOSQL
CREATE TABLE IF NOT EXISTS Users(
  account_id        SERIAL PRIMARY KEY,
  account_name      VARCHAR(20),
  email             VARCHAR(100),
  password    CHAR(64)
);

INSERT INTO Users(account_name, email, password) Values
    ('太郎', 'hogehoge1@xxxx.xxxx', 'hogehoge'),
    ('次郎', 'hogehoge2@xxxx.xxxx', 'hogehoge'),
    ('三郎', 'hogehoge3@xxxx.xxxx', 'hogehoge'),
    ('四郎', 'hogehoge4@xxxx.xxxx', 'hogehoge');

EOSQL