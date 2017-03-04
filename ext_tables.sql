CREATE TABLE tx_calendar_domain_model_event (
  uid              INT(11)                         NOT NULL AUTO_INCREMENT,
  pid              INT(11) DEFAULT '0'             NOT NULL,


  title            VARCHAR(220) DEFAULT ''         NOT NULL,
  start            DATETIME                        NOT NULL,
  end              DATETIME                        NOT NULL,
  timezone         VARCHAR(20)                              DEFAULT 'UTC',
  categories       INT(11) UNSIGNED DEFAULT '0'    NOT NULL,

  location_name    VARCHAR(255)                             DEFAULT '',
  location_address TEXT,
  location_city    VARCHAR(255)                             DEFAULT '',
  location_zip     VARCHAR(10)                              DEFAULT '',
  location_country VARCHAR(3)                               DEFAULT '',

  hashtags         VARCHAR(255)                             DEFAULT '',

  url              VARCHAR(255)                             DEFAULT '',

  cruser_fe        INT(11)                                  DEFAULT '0',

  tstamp           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  crdate           INT(11) UNSIGNED DEFAULT '0'    NOT NULL,
  deleted          TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,
  hidden           TINYINT(4) UNSIGNED DEFAULT '0' NOT NULL,

  PRIMARY KEY (uid),
  KEY parent (pid)
);