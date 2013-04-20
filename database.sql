-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 21, 2013 at 01:25 AM
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
  `name` varchar(80) NOT NULL,
  `company_since` date NOT NULL,
  `competitive_product` varchar(80) NOT NULL,
  `date_registered` date NOT NULL,
  `msp_since` date NOT NULL,
  `annual_revenue` float NOT NULL,
  `24x7_support` tinyint(4) NOT NULL DEFAULT '0',
  `active_client_count` int(11) NOT NULL,
  `average_client_size` int(11) NOT NULL,
  `brand_value_and_market_visibility` float NOT NULL,
  `client_ticketing` tinyint(4) NOT NULL,
  `employee_count` int(11) NOT NULL,
  `helpdesk` tinyint(4) NOT NULL,
  `linux_support` tinyint(4) NOT NULL,
  `mac_support` tinyint(4) NOT NULL,
  `mobile_support` tinyint(4) NOT NULL,
  `msp_client_count` int(11) NOT NULL,
  `noc` tinyint(4) NOT NULL,
  `noc_communication` text NOT NULL,
  `office_count` int(11) NOT NULL,
  `patch_mgmt` tinyint(4) NOT NULL,
  `product_feedback` text NOT NULL,
  `satisfaction_rating` int(11) NOT NULL,
  `satisfaction_rating_comments` text NOT NULL,
  `service_delivery` tinyint(4) NOT NULL,
  `sevice_quality` int(11) NOT NULL,
  `technical_expertise` tinyint(4) NOT NULL,
  `technician_count` int(11) NOT NULL,
  `tech_ops_review_date` date NOT NULL,
  `total_client_count` int(11) NOT NULL,
  `total_desktop_agents` int(11) NOT NULL,
  `total_desktop_managed` int(11) NOT NULL,
  `total_server_agents` int(11) NOT NULL,
  `total_server_managed` int(11) NOT NULL,
  `total_site_count` int(11) NOT NULL,
  `virtualization` tinyint(4) NOT NULL,
  `region_id` int(10) unsigned NOT NULL,
  `ticketing_application_id` int(10) unsigned NOT NULL,
  `datacenter_id` int(10) unsigned NOT NULL,
  `classification_id` int(10) unsigned NOT NULL,
  `account_type_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `region_id` (`region_id`),
  KEY `ticketing_application_id` (`ticketing_application_id`,`datacenter_id`,`classification_id`,`account_type_id`),
  KEY `datacenter_id` (`datacenter_id`),
  KEY `classification_id` (`classification_id`),
  KEY `account_type_id` (`account_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `account_type`
--

CREATE TABLE `account_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bdr_competition`
--

CREATE TABLE `bdr_competition` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classification`
--

CREATE TABLE `classification` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `cloud_vendors`
--

CREATE TABLE `cloud_vendors` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `crm_applications`
--

CREATE TABLE `crm_applications` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `datacenter`
--

CREATE TABLE `datacenter` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hosted_apps`
--

CREATE TABLE `hosted_apps` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `hypervisor_virtualization_platform`
--

CREATE TABLE `hypervisor_virtualization_platform` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `industry_affiliates`
--

CREATE TABLE `industry_affiliates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `psa_vendor`
--

CREATE TABLE `psa_vendor` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `rmm_adoption`
--

CREATE TABLE `rmm_adoption` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ticketing_application`
--

CREATE TABLE `ticketing_application` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account_information`
--
ALTER TABLE `account_information`
  ADD CONSTRAINT `account_information_ibfk_6` FOREIGN KEY (`account_type_id`) REFERENCES `account_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_information_ibfk_2` FOREIGN KEY (`region_id`) REFERENCES `region` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_information_ibfk_3` FOREIGN KEY (`ticketing_application_id`) REFERENCES `ticketing_application` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_information_ibfk_4` FOREIGN KEY (`datacenter_id`) REFERENCES `datacenter` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `account_information_ibfk_5` FOREIGN KEY (`classification_id`) REFERENCES `classification` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `bdr_competition_many`
--
ALTER TABLE `bdr_competition_many`
  ADD CONSTRAINT `bdr_competition_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_type` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `bdr_competition_many_ibfk_1` FOREIGN KEY (`bdr_competition_id`) REFERENCES `bdr_competition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cloud_vendors_many`
--
ALTER TABLE `cloud_vendors_many`
  ADD CONSTRAINT `cloud_vendors_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cloud_vendors_many_ibfk_1` FOREIGN KEY (`cloud_vendors_id`) REFERENCES `cloud_vendors` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `crm_applications_many`
--
ALTER TABLE `crm_applications_many`
  ADD CONSTRAINT `crm_applications_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `crm_applications_many_ibfk_1` FOREIGN KEY (`crm_applications_id`) REFERENCES `crm_applications` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hosted_apps_many`
--
ALTER TABLE `hosted_apps_many`
  ADD CONSTRAINT `hosted_apps_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hosted_apps_many_ibfk_1` FOREIGN KEY (`hosted_apps_id`) REFERENCES `hosted_apps` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `hypervisor_virtualization_platform_many`
--
ALTER TABLE `hypervisor_virtualization_platform_many`
  ADD CONSTRAINT `hypervisor_virtualization_platform_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hypervisor_virtualization_platform_many_ibfk_1` FOREIGN KEY (`hypervisor_virtualization_platform_id`) REFERENCES `hypervisor_virtualization_platform` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `industry_affiliates_many`
--
ALTER TABLE `industry_affiliates_many`
  ADD CONSTRAINT `industry_affiliates_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `industry_affiliates_many_ibfk_1` FOREIGN KEY (`industry_affiliates_id`) REFERENCES `industry_affiliates` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rmm_adoption_many`
--
ALTER TABLE `rmm_adoption_many`
  ADD CONSTRAINT `rmm_adoption_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rmm_adoption_many_ibfk_1` FOREIGN KEY (`rmm_adomption_id`) REFERENCES `rmm_adoption` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rmm_competition_many`
--
ALTER TABLE `rmm_competition_many`
  ADD CONSTRAINT `rmm_competition_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rmm_competition_many_ibfk_1` FOREIGN KEY (`rmm_competition_id`) REFERENCES `rmm_competition` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `target_industry_verticals_many`
--
ALTER TABLE `target_industry_verticals_many`
  ADD CONSTRAINT `target_industry_verticals_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `target_industry_verticals_many_ibfk_1` FOREIGN KEY (`target_industry_verticals_id`) REFERENCES `target_industry_verticals` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `virtualization_platform_many`
--
ALTER TABLE `virtualization_platform_many`
  ADD CONSTRAINT `virtualization_platform_many_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account_information` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `virtualization_platform_many_ibfk_1` FOREIGN KEY (`virtualization_platform_id`) REFERENCES `virtualization_platform` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
