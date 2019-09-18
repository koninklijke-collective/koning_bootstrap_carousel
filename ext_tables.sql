#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    koningbootstrapcarousel_slides int(11) DEFAULT '0' NOT NULL,
);

#
# Table structure for table 'tx_koningbootstrapcarousel_domain_model_slide'
#
CREATE TABLE tx_koningbootstrapcarousel_domain_model_slide (
    content_id int(11) DEFAULT '0' NOT NULL,
    title tinytext,
    link text,
    description text,
    link_text text,
    visual int(11) DEFAULT '0' NOT NULL,
    visual_size varchar(255) DEFAULT '' NOT NULL,
    visual_position varchar(255) DEFAULT '' NOT NULL,

    KEY content_id (content_id)
);
