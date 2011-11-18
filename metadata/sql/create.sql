USE tea;
CREATE TABLE t_tea_message (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(16) DEFAULT 'guest',
  email varchar(64) NULL,
  content text NOT NULL,
  create_date timestamp DEFAULT now(),
  ip varchar(16) DEFAULT NULL,
  mark int(11) DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE t_tea_user (
  id int(11) NOT NULL AUTO_INCREMENT,
  username varchar(16) NOT NULL,
  password varchar(16) NOT NULL,
  email varchar(64) NOT NULL,
  create_date timestamp DEFAULT now(),
  ip varchar(16) DEFAULT NULL,
  mark int(11) DEFAULT 0,
  PRIMARY KEY (id)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE t_tea_wiki (
  id int(11) NOT NULL AUTO_INCREMENT,
  name varchar(16) NOT NULL,
  email varchar(64) NOT NULL,
  title varchar(16) NOT NULL,
  content text NOT NULL,
  image varchar(256) NULL,
  repost varchar(256) NULL,
  create_date timestamp DEFAULT now(),
  ip varchar(16) DEFAULT NULL,
  mark int(11) DEFAULT 0,
  PRIMARY KEY (id),
  UNIQUE KEY title (title)
) ENGINE=InnoDB CHARSET=utf8;

CREATE TABLE t_tea_wiki_stat (
  id int(11) NOT NULL AUTO_INCREMENT,
  wkid int(11) NOT NULL,
  count int(11) DEFAULT 1,
  operate varchar(8) DEFAULT 'pv',
  PRIMARY KEY (id)
) ENGINE=InnoDB CHARSET=utf8;
