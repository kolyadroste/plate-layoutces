
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

    tx_plate_layoutces_margins          varchar(255) DEFAULT '' NOT NULL,
);
#
# alter tx_plate_layout_ces_margins table
#
CREATE TABLE tx_plate_layout_ces_margins
(
    smbp_margin     varchar(255) DEFAULT '' NOT NULL,
    smtop_margin    varchar(255) DEFAULT '' NOT NULL,
    smleft_margin   varchar(255) DEFAULT '' NOT NULL,
    smbottom_margin varchar(255) DEFAULT '' NOT NULL,
    smright_margin  varchar(255) DEFAULT '' NOT NULL,

    mdbp_margin     varchar(255) DEFAULT '' NOT NULL,
    mdtop_margin    varchar(255) DEFAULT '' NOT NULL,
    mdleft_margin   varchar(255) DEFAULT '' NOT NULL,
    mdbottom_margin varchar(255) DEFAULT '' NOT NULL,
    mdright_margin  varchar(255) DEFAULT '' NOT NULL,

    lgbp_margin     varchar(255) DEFAULT '' NOT NULL,
    lgtop_margin    varchar(255) DEFAULT '' NOT NULL,
    lgleft_margin   varchar(255) DEFAULT '' NOT NULL,
    lgbottom_margin varchar(255) DEFAULT '' NOT NULL,
    lgright_margin  varchar(255) DEFAULT '' NOT NULL,

    xlbp_margin     varchar(255) DEFAULT '' NOT NULL,
    xltop_margin    varchar(255) DEFAULT '' NOT NULL,
    xlleft_margin   varchar(255) DEFAULT '' NOT NULL,
    xlbottom_margin varchar(255) DEFAULT '' NOT NULL,
    xlright_margin  varchar(255) DEFAULT '' NOT NULL,
);

