-- Query for game_types languages
ALTER TABLE `game_type` ADD `chinese_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`, ADD `taiwan_name` VARCHAR(100) NULL DEFAULT NULL AFTER `chinese_name`, ADD `indonesia_name` VARCHAR(100) NULL DEFAULT NULL AFTER `taiwan_name`, ADD `vietnam_name` VARCHAR(100) NULL DEFAULT NULL AFTER `indonesia_name`;

-- Query for lottery_types languages 

ALTER TABLE `lottery_type` CHANGE `cn_name` `chinese_name` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL, CHANGE `tl_name` `taiwan_name` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL, CHANGE `id_name` `indonesia_name` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL, CHANGE `vit_name` `vietnam_name` VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL;

-- Query for Standard Games languages  
ALTER TABLE `game_name` ADD `chinese_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`, ADD `taiwan_name` VARCHAR(100) NULL DEFAULT NULL AFTER `chinese_name`, ADD `indonesia_name` VARCHAR(100) NULL DEFAULT NULL AFTER `taiwan_name`, ADD `vietnam_name` VARCHAR(100) NULL DEFAULT NULL AFTER `indonesia_name`;

-- Query for twosides langaues 
ALTER TABLE `twosides` ADD `chinese_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`, ADD `taiwan_name` VARCHAR(100) NULL DEFAULT NULL AFTER `chinese_name`, ADD `indonesia_name` VARCHAR(100) NULL DEFAULT NULL AFTER `taiwan_name`, ADD `vietnam_name` VARCHAR(100) NULL DEFAULT NULL AFTER `indonesia_name`;

-- Query  for longdragon langaues 
ALTER TABLE `longdragon` ADD `chinese_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`, ADD `taiwan_name` VARCHAR(100) NULL DEFAULT NULL AFTER `chinese_name`, ADD `indonesia_name` VARCHAR(100) NULL DEFAULT NULL AFTER `taiwan_name`, ADD `vietnam_name` VARCHAR(100) NULL DEFAULT NULL AFTER `indonesia_name`;

-- Query for fantan
ALTER TABLE `fantan` ADD `chinese_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`, ADD `taiwan_name` VARCHAR(100) NULL DEFAULT NULL AFTER `chinese_name`, ADD `indonesia_name` VARCHAR(100) NULL DEFAULT NULL AFTER `taiwan_name`, ADD `vietnam_name` VARCHAR(100) NULL DEFAULT NULL AFTER `indonesia_name`;

-- Query for  boardgames 
ALTER TABLE `boardgames` ADD `chinese_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`, ADD `taiwan_name` VARCHAR(100) NULL DEFAULT NULL AFTER `chinese_name`, ADD `indonesia_name` VARCHAR(100) NULL DEFAULT NULL AFTER `taiwan_name`, ADD `vietnam_name` VARCHAR(100) NULL DEFAULT NULL AFTER `indonesia_name`;


-- Query for Many tables 
ALTER TABLE `manytables` ADD `chinese_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`, ADD `taiwan_name` VARCHAR(100) NULL DEFAULT NULL AFTER `chinese_name`, ADD `indonesia_name` VARCHAR(100) NULL DEFAULT NULL AFTER `taiwan_name`, ADD `vietnam_name` VARCHAR(100) NULL DEFAULT NULL AFTER `indonesia_name`;


-- Query for Road Bet
ALTER TABLE `roadbet` ADD `chinese_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`, ADD `taiwan_name` VARCHAR(100) NULL DEFAULT NULL AFTER `chinese_name`, ADD `indonesia_name` VARCHAR(100) NULL DEFAULT NULL AFTER `taiwan_name`, ADD `vietnam_name` VARCHAR(100) NULL DEFAULT NULL AFTER `indonesia_name`;

-- Query for game Group
ALTER TABLE `game_group` ADD `chinese_name` VARCHAR(100) NULL DEFAULT NULL AFTER `name`, ADD `taiwan_name` VARCHAR(100) NULL DEFAULT NULL AFTER `chinese_name`, ADD `indonesia_name` VARCHAR(100) NULL DEFAULT NULL AFTER `taiwan_name`, ADD `vietnam_name` VARCHAR(100) NULL DEFAULT NULL AFTER `indonesia_name`;
