-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 30, 2013 at 12:44 AM
-- Server version: 5.5.29
-- PHP Version: 5.4.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `continuum`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_information`
--

CREATE TABLE `account_information` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `member_number` int(11) NOT NULL DEFAULT '0',
  `name` varchar(80) NOT NULL,
  `company_since` date DEFAULT NULL,
  `competitive_product` varchar(80) DEFAULT NULL,
  `date_registered` date DEFAULT NULL,
  `msp_since` date DEFAULT NULL,
  `annual_revenue` float DEFAULT NULL,
  `24x7_support` tinyint(4) DEFAULT NULL,
  `active_client_count` int(11) DEFAULT NULL,
  `average_client_size` int(11) DEFAULT NULL,
  `brand_value_and_market_visibility` float DEFAULT NULL,
  `client_ticketing` tinyint(4) DEFAULT NULL,
  `employee_count` int(11) DEFAULT NULL,
  `helpdesk` tinyint(4) DEFAULT NULL,
  `linux_support` tinyint(4) DEFAULT NULL,
  `mac_support` tinyint(4) DEFAULT NULL,
  `mobile_support` tinyint(4) DEFAULT NULL,
  `msp_client_count` int(11) DEFAULT NULL,
  `noc` tinyint(4) DEFAULT NULL,
  `noc_communications` text,
  `office_count` int(11) DEFAULT NULL,
  `patch_mgmt` tinyint(4) DEFAULT NULL,
  `product_feedback` text,
  `satisfaction_rating` int(11) DEFAULT NULL,
  `satisfaction_rating_comments` text,
  `service_delivery` tinyint(4) DEFAULT NULL,
  `service_quality` int(11) DEFAULT NULL,
  `technical_expertise` tinyint(4) DEFAULT NULL,
  `technician_count` int(11) DEFAULT NULL,
  `tech_ops_review_date` date DEFAULT NULL,
  `total_client_count` int(11) DEFAULT NULL,
  `total_desktop_agents` int(11) DEFAULT NULL,
  `total_desktops_managed` int(11) DEFAULT NULL,
  `total_server_agents` int(11) DEFAULT NULL,
  `total_servers_managed` int(11) DEFAULT NULL,
  `total_site_count` int(11) DEFAULT NULL,
  `virtualization` tinyint(4) DEFAULT NULL,
  `region_id` int(10) unsigned DEFAULT NULL,
  `ticketing_application_id` int(10) unsigned DEFAULT NULL,
  `datacenter_id` int(10) unsigned DEFAULT NULL,
  `classification_id` int(10) unsigned DEFAULT NULL,
  `account_type_id` int(10) unsigned NOT NULL,
  `psa_vendor_id` int(10) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `region_id` (`region_id`),
  KEY `ticketing_application_id` (`ticketing_application_id`,`datacenter_id`,`classification_id`,`account_type_id`),
  KEY `datacenter_id` (`datacenter_id`),
  KEY `classification_id` (`classification_id`),
  KEY `account_type_id` (`account_type_id`),
  KEY `psa_vendor_id` (`psa_vendor_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `account_information`
--

INSERT INTO `account_information` (`id`, `member_number`, `name`, `company_since`, `competitive_product`, `date_registered`, `msp_since`, `annual_revenue`, `24x7_support`, `active_client_count`, `average_client_size`, `brand_value_and_market_visibility`, `client_ticketing`, `employee_count`, `helpdesk`, `linux_support`, `mac_support`, `mobile_support`, `msp_client_count`, `noc`, `noc_communications`, `office_count`, `patch_mgmt`, `product_feedback`, `satisfaction_rating`, `satisfaction_rating_comments`, `service_delivery`, `service_quality`, `technical_expertise`, `technician_count`, `tech_ops_review_date`, `total_client_count`, `total_desktop_agents`, `total_desktops_managed`, `total_server_agents`, `total_servers_managed`, `total_site_count`, `virtualization`, `region_id`, `ticketing_application_id`, `datacenter_id`, `classification_id`, `account_type_id`, `psa_vendor_id`) VALUES
(21, 6666, '101 Infotech', NULL, NULL, '1999-09-30', '2005-10-11', 50.5, 1, 110, 109, 1, 1, 10901, 1, 1, 1, 1, 109, 0, 'They are great .. English is perfect.', 1550, 1, 'It is a great product! Keep it up', 9, 'We need you guys now. Wonderful service.', 1, 0, 0, 49, '1998-10-12', 550, 600, 1570, NULL, 160, 100, 1, 3, 2, 1, NULL, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE `account_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `account_type`
--

INSERT INTO `account_type` (`id`, `name`) VALUES
(3, 'Eval Partner'),
(5, 'Infotech Partner'),
(2, 'Lost Partner'),
(1, 'Partner'),
(4, 'Terminated Partner');

-- --------------------------------------------------------

--
-- Table structure for table `bdr_competition`
--

CREATE TABLE `bdr_competition` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `bdr_competition`
--

INSERT INTO `bdr_competition` (`id`, `name`) VALUES
(1, 'Datto'),
(2, 'eFolder'),
(3, 'Chartec'),
(4, 'Zenith Infotech'),
(5, 'Symantec'),
(6, 'Intronis'),
(7, 'AppAssure'),
(8, 'NetApp'),
(9, 'Equalogic'),
(10, 'StorageCraft'),
(11, 'MozyPro'),
(12, 'Acronis'),
(13, 'Axcient'),
(14, 'Barracuda'),
(15, 'IBM'),
(16, 'HP'),
(17, 'Venbu'),
(18, 'Veritas'),
(19, 'SOS Online Backup'),
(20, 'iBackup'),
(21, 'Sun'),
(22, 'EMC'),
(23, 'Buffalo Technology'),
(24, 'Unitrends'),
(25, 'SonicWALL'),
(26, 'DELL'),
(27, 'Cisco Systems'),
(28, 'Seagate'),
(29, 'MX Logic'),
(30, 'XiloCore');

-- --------------------------------------------------------

--
-- Table structure for table `bdr_competition_many`
--

CREATE TABLE `bdr_competition_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bdr_competition_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `bdr_competition_id` (`bdr_competition_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `bdr_competition_many`
--

INSERT INTO `bdr_competition_many` (`id`, `bdr_competition_id`, `account_id`) VALUES
(47, 1, 21),
(48, 4, 21);

-- --------------------------------------------------------

--
-- Table structure for table `classification`
--

CREATE TABLE `classification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `classification`
--

INSERT INTO `classification` (`id`, `name`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `cloud_vendors`
--

CREATE TABLE `cloud_vendors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `cloud_vendors`
--

INSERT INTO `cloud_vendors` (`id`, `name`) VALUES
(1, 'Microsoft'),
(2, 'Google'),
(3, 'Amazon'),
(4, 'Rackspace');

-- --------------------------------------------------------

--
-- Table structure for table `cloud_vendors_many`
--

CREATE TABLE `cloud_vendors_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cloud_vendors_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `cloud_vendors_id` (`cloud_vendors_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

-- --------------------------------------------------------

--
-- Table structure for table `crm_applications`
--

CREATE TABLE `crm_applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `crm_applications`
--

INSERT INTO `crm_applications` (`id`, `name`) VALUES
(4, 'Autotask'),
(6, 'CommitCRM'),
(3, 'ConnectWise'),
(1, 'Custom Developed'),
(8, 'MS CRM'),
(2, 'Quickbooks'),
(5, 'Salesforce.com'),
(9, 'SalesLogix'),
(11, 'Spiceworks'),
(7, 'Tigerpaw'),
(10, 'TOPS');

-- --------------------------------------------------------

--
-- Table structure for table `crm_applications_many`
--

CREATE TABLE `crm_applications_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `crm_applications_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `crm_applications_id` (`crm_applications_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `crm_applications_many`
--

INSERT INTO `crm_applications_many` (`id`, `crm_applications_id`, `account_id`) VALUES
(34, 1, 21),
(33, 6, 21);

-- --------------------------------------------------------

--
-- Table structure for table `datacenter`
--

CREATE TABLE `datacenter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `datacenter`
--

INSERT INTO `datacenter` (`id`, `name`) VALUES
(1, 'Internally Owned and Operated'),
(2, 'Outsourced to Third Party Vendor');

-- --------------------------------------------------------

--
-- Table structure for table `hosted_apps`
--

CREATE TABLE `hosted_apps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `hosted_apps`
--

INSERT INTO `hosted_apps` (`id`, `name`) VALUES
(1, 'Exchange'),
(2, 'Google Apps'),
(3, 'Office365');

-- --------------------------------------------------------

--
-- Table structure for table `hosted_apps_many`
--

CREATE TABLE `hosted_apps_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hosted_apps_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hosted_apps_id` (`hosted_apps_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `hosted_apps_many`
--

INSERT INTO `hosted_apps_many` (`id`, `hosted_apps_id`, `account_id`) VALUES
(17, 1, 21);

-- --------------------------------------------------------

--
-- Table structure for table `hypervisor_virtualization_platform`
--

CREATE TABLE `hypervisor_virtualization_platform` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `hypervisor_virtualization_platform`
--

INSERT INTO `hypervisor_virtualization_platform` (`id`, `name`) VALUES
(3, 'Citrix XEN'),
(5, 'Google (Google Apps)'),
(2, 'Hyper V'),
(4, 'Microsoft (Azure)'),
(1, 'VMWare');

-- --------------------------------------------------------

--
-- Table structure for table `hypervisor_virtualization_platform_many`
--

CREATE TABLE `hypervisor_virtualization_platform_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `hypervisor_virtualization_platform_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `hypervisor_virtualization_platform_id` (`hypervisor_virtualization_platform_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `hypervisor_virtualization_platform_many`
--

INSERT INTO `hypervisor_virtualization_platform_many` (`id`, `hypervisor_virtualization_platform_id`, `account_id`) VALUES
(33, 3, 21),
(34, 5, 21);

-- --------------------------------------------------------

--
-- Table structure for table `industry_affiliates`
--

CREATE TABLE `industry_affiliates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `industry_affiliates`
--

INSERT INTO `industry_affiliates` (`id`, `name`) VALUES
(6, 'ASCII'),
(3, 'CMIT'),
(1, 'Computer Troubleshooters'),
(17, 'Continuum PAC'),
(11, 'Expetec'),
(4, 'GAP'),
(10, 'HTG'),
(20, 'IATI'),
(13, 'Ingram Micro VTN'),
(12, 'Microsoft SBS'),
(2, 'MSFT Partner'),
(7, 'MSP Mentor'),
(5, 'Robin Robins'),
(8, 'SMB Nation'),
(15, 'TAG'),
(19, 'Taylor Business Group'),
(14, 'Tech Data'),
(16, 'VMware');

-- --------------------------------------------------------

--
-- Table structure for table `industry_affiliates_many`
--

CREATE TABLE `industry_affiliates_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `industry_affiliates_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `industry_affiliates_id` (`industry_affiliates_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `industry_affiliates_many`
--

INSERT INTO `industry_affiliates_many` (`id`, `industry_affiliates_id`, `account_id`) VALUES
(34, 3, 21),
(33, 6, 21);

-- --------------------------------------------------------

--
-- Table structure for table `psa_vendor`
--

CREATE TABLE `psa_vendor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `psa_vendor`
--

INSERT INTO `psa_vendor` (`id`, `name`) VALUES
(1, 'Autotask'),
(4, 'CommitCRM'),
(2, 'ConnectWise'),
(3, 'TigerPaw');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `name`) VALUES
(3, 'Mid-Atlantic'),
(1, 'Northeast'),
(5, 'Northwest'),
(4, 'Southeast'),
(2, 'Southwest');

-- --------------------------------------------------------

--
-- Table structure for table `rmm_adoption`
--

CREATE TABLE `rmm_adoption` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `rmm_adoption`
--

INSERT INTO `rmm_adoption` (`id`, `name`) VALUES
(1, 'Chat Support'),
(2, 'Client Portal'),
(3, 'LMI'),
(4, 'Network Detective'),
(5, 'Password Vault'),
(6, 'Patching'),
(7, 'RMM Service Plans'),
(8, 'Ticketing'),
(9, 'Vipre'),
(10, 'Communicator'),
(11, 'ContinuumU'),
(12, 'Hyper-V'),
(13, 'Intellimonitoring'),
(14, 'NOC Access Levels'),
(15, 'Off-Hours Desktop Maintenance'),
(16, 'Portal Reporting'),
(17, 'PSP'),
(18, 'RMM Service Plans'),
(19, 'Scripting'),
(20, 'SNMP/OID'),
(21, 'User Roles'),
(22, 'VMware Monitoring'),
(23, 'VSD'),
(24, 'Going Green'),
(25, 'Network Detective'),
(26, 'RMM Agent Types');

-- --------------------------------------------------------

--
-- Table structure for table `rmm_adoption_many`
--

CREATE TABLE `rmm_adoption_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rmm_adomption_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rmm_adomption_id` (`rmm_adomption_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rmm_competition`
--

CREATE TABLE `rmm_competition` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Dumping data for table `rmm_competition`
--

INSERT INTO `rmm_competition` (`id`, `name`) VALUES
(1, 'Kaseya'),
(2, 'GFI MAX'),
(3, 'LabTech'),
(4, 'Go To Assist'),
(5, 'Spiceworks'),
(6, 'LPI'),
(7, 'N-able'),
(8, 'PacketTrap'),
(9, 'Ingram Micro Seismic'),
(10, 'DELL'),
(11, 'LanDesk'),
(12, 'Nagios'),
(13, 'Microsoft'),
(14, 'itControl Solutions'),
(15, 'HP OpenView'),
(16, 'Solar Winds'),
(17, 'HyBlue'),
(18, 'HandsFree'),
(19, 'SolarWinds'),
(20, 'AppNeta'),
(21, 'Nimsoft'),
(22, 'Symantec'),
(23, 'HyBlue'),
(24, 'IT ControlSuite');

-- --------------------------------------------------------

--
-- Table structure for table `rmm_competition_many`
--

CREATE TABLE `rmm_competition_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `rmm_competition_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `rmm_competition_id` (`rmm_competition_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `target_industry_verticals`
--

CREATE TABLE `target_industry_verticals` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `target_industry_verticals`
--

INSERT INTO `target_industry_verticals` (`id`, `name`) VALUES
(5, 'Agriculture'),
(6, 'Apparel'),
(7, 'Banking'),
(8, 'Biotechnology'),
(9, 'Chemicals'),
(10, 'Communications'),
(11, 'Construction'),
(12, 'Consulting'),
(13, 'Education'),
(14, 'Electronics'),
(15, 'Energy'),
(16, 'Engineering'),
(17, 'Entertainment'),
(18, 'Environmental'),
(1, 'Finance'),
(19, 'Food & Beverage'),
(20, 'Government'),
(2, 'Healthcare'),
(21, 'Hospitality'),
(4, 'Insurance'),
(3, 'Legal'),
(23, 'Machinery'),
(24, 'Manufacturing'),
(25, 'Media'),
(26, 'Municipalities'),
(27, 'Not For Profit'),
(28, 'Recreation'),
(29, 'Residential'),
(30, 'Retail'),
(31, 'Shipping'),
(32, 'Technology'),
(33, 'Telecommunications'),
(34, 'Transportation'),
(35, 'Utilities');

-- --------------------------------------------------------

--
-- Table structure for table `target_industry_verticals_many`
--

CREATE TABLE `target_industry_verticals_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `target_industry_verticals_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `target_industry_verticals_id` (`target_industry_verticals_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `target_industry_verticals_many`
--

INSERT INTO `target_industry_verticals_many` (`id`, `target_industry_verticals_id`, `account_id`) VALUES
(33, 5, 21),
(34, 7, 21);

-- --------------------------------------------------------

--
-- Table structure for table `ticketing_application`
--

CREATE TABLE `ticketing_application` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ticketing_application`
--

INSERT INTO `ticketing_application` (`id`, `name`) VALUES
(1, 'Autotask'),
(2, 'ConnectWise'),
(3, 'TigerPaw'),
(4, 'Zendesk');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(80) NOT NULL,
  `password` varchar(64) NOT NULL,
  `salt` varchar(8) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `salt`) VALUES
(1, 'test', '5234e5b71621ca9e6f45e3eef26c6c521258a46bc8a6ae4af4ab08b0ac25d66e', '9910FGDS');

-- --------------------------------------------------------

--
-- Table structure for table `virtualization_platform`
--

CREATE TABLE `virtualization_platform` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `virtualization_platform`
--

INSERT INTO `virtualization_platform` (`id`, `name`) VALUES
(4, 'Citrix'),
(1, 'Hyper-V'),
(6, 'SmartStyle'),
(5, 'VirtualBox'),
(2, 'VMWare');

-- --------------------------------------------------------

--
-- Table structure for table `virtualization_platform_many`
--

CREATE TABLE `virtualization_platform_many` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `virtualization_platform_id` int(10) unsigned NOT NULL,
  `account_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `virtualization_platform_id` (`virtualization_platform_id`,`account_id`),
  KEY `account_id` (`account_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `virtualization_platform_many`
--

INSERT INTO `virtualization_platform_many` (`id`, `virtualization_platform_id`, `account_id`) VALUES
(34, 1, 21),
(33, 4, 21);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_information`
--
ALTER TABLE `account_information`
  ADD CONSTRAINT `account_information_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_information_ibfk_3` FOREIGN KEY (`ticketing_application_id`) REFERENCES `ticketing_application` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_information_ibfk_4` FOREIGN KEY (`datacenter_id`) REFERENCES `datacenter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_information_ibfk_5` FOREIGN KEY (`classification_id`) REFERENCES `classification` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_information_ibfk_6` FOREIGN KEY (`account_type_id`) REFERENCES `account_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_information_ibfk_7` FOREIGN KEY (`psa_vendor_id`) REFERENCES `psa_vendor` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bdr_competition_many`
--
ALTER TABLE `bdr_competition_many`
  ADD CONSTRAINT `bdr_competition_many_ibfk_1` FOREIGN KEY (`bdr_competition_id`) REFERENCES `bdr_competition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bdr_competition_many_ibfk_3` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cloud_vendors_many`
--
ALTER TABLE `cloud_vendors_many`
  ADD CONSTRAINT `cloud_vendors_many_ibfk_1` FOREIGN KEY (`cloud_vendors_id`) REFERENCES `cloud_vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cloud_vendors_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_applications_many`
--
ALTER TABLE `crm_applications_many`
  ADD CONSTRAINT `crm_applications_many_ibfk_1` FOREIGN KEY (`crm_applications_id`) REFERENCES `crm_applications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_applications_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosted_apps_many`
--
ALTER TABLE `hosted_apps_many`
  ADD CONSTRAINT `hosted_apps_many_ibfk_1` FOREIGN KEY (`hosted_apps_id`) REFERENCES `hosted_apps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hosted_apps_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hypervisor_virtualization_platform_many`
--
ALTER TABLE `hypervisor_virtualization_platform_many`
  ADD CONSTRAINT `hypervisor_virtualization_platform_many_ibfk_1` FOREIGN KEY (`hypervisor_virtualization_platform_id`) REFERENCES `hypervisor_virtualization_platform` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hypervisor_virtualization_platform_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `industry_affiliates_many`
--
ALTER TABLE `industry_affiliates_many`
  ADD CONSTRAINT `industry_affiliates_many_ibfk_1` FOREIGN KEY (`industry_affiliates_id`) REFERENCES `industry_affiliates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `industry_affiliates_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rmm_adoption_many`
--
ALTER TABLE `rmm_adoption_many`
  ADD CONSTRAINT `rmm_adoption_many_ibfk_1` FOREIGN KEY (`rmm_adomption_id`) REFERENCES `rmm_adoption` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rmm_adoption_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rmm_competition_many`
--
ALTER TABLE `rmm_competition_many`
  ADD CONSTRAINT `rmm_competition_many_ibfk_1` FOREIGN KEY (`rmm_competition_id`) REFERENCES `rmm_competition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rmm_competition_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `target_industry_verticals_many`
--
ALTER TABLE `target_industry_verticals_many`
  ADD CONSTRAINT `target_industry_verticals_many_ibfk_1` FOREIGN KEY (`target_industry_verticals_id`) REFERENCES `target_industry_verticals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `target_industry_verticals_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `virtualization_platform_many`
--
ALTER TABLE `virtualization_platform_many`
  ADD CONSTRAINT `virtualization_platform_many_ibfk_1` FOREIGN KEY (`virtualization_platform_id`) REFERENCES `virtualization_platform` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `virtualization_platform_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
