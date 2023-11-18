
#
# alter tt_content table
#
CREATE TABLE tt_content
(
    tx_plate_layoutces_show_search      tinyint(4) unsigned DEFAULT '0' NOT NULL,
    tx_plate_layoutces_show_contactinfo tinyint(4) unsigned DEFAULT '0' NOT NULL,
    tx_plate_layoutces_showatxs         tinyint(4) unsigned DEFAULT '1' NOT NULL,
    tx_plate_layoutces_showatsm         tinyint(4) unsigned DEFAULT '1' NOT NULL,
    tx_plate_layoutces_description      mediumtext,
    tx_plate_layoutces_smbp             varchar(255) DEFAULT '' NOT NULL,
    tx_plate_layoutces_showatmd         tinyint(4) unsigned DEFAULT '1' NOT NULL,
    tx_plate_layoutces_mdbp             varchar(255) DEFAULT '' NOT NULL,
    tx_plate_layoutces_showatlg         tinyint(4) unsigned DEFAULT '1' NOT NULL,
    tx_plate_layoutces_lgbp             varchar(255) DEFAULT '' NOT NULL,
    tx_plate_layoutces_showatxl         tinyint(4) unsigned DEFAULT '1' NOT NULL,
    tx_plate_layoutces_xlbp             varchar(255) DEFAULT '' NOT NULL,
    tx_plate_layoutces_showatxxl         tinyint(4) unsigned DEFAULT '1' NOT NULL,
    tx_plate_layoutces_xxlbp             varchar(255) DEFAULT '' NOT NULL,

    tx_plate_layoutces_margins          varchar(255) DEFAULT '' NOT NULL,
    tx_pl_lces_contentlinks_add_to_nav tinyint(4) unsigned DEFAULT '0' NOT NULL,
    pl_lces_nav_title varchar(255) DEFAULT '' NOT NULL,
);
