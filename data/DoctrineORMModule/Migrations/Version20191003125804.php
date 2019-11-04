<?php

namespace DoctrineORMModule\Migrations;

use Doctrine\DBAL\Migrations\AbstractMigration;
use Doctrine\DBAL\Schema\Schema;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
class Version20191003125804 extends AbstractMigration
{
    /**
     * @param Schema $schema
     */
    public function up(Schema $schema)
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE user CHANGE pwd_reset_token pwd_reset_token VARCHAR(255) DEFAULT NULL, CHANGE pwd_reset_token_creation_date pwd_reset_token_creation_date DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE permission CHANGE date_created date_created DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE comments CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE blog_id blog_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE blog CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL, CHANGE date_online date_online DATETIME DEFAULT NULL, CHANGE date_offline date_offline DATETIME DEFAULT NULL, CHANGE tweet_id tweet_id VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE blogimages CHANGE name_image name_image VARCHAR(255) DEFAULT NULL, CHANGE alt alt VARCHAR(255) DEFAULT NULL, CHANGE description_image description_image VARCHAR(255) DEFAULT NULL, CHANGE sort_order sort_order INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agenda CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL, CHANGE whole_day whole_day INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agenda_item CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT NULL, CHANGE whole_day whole_day INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE file CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE imagetypes CHANGE width width INT DEFAULT NULL, CHANGE height height INT DEFAULT NULL');
        $this->addSql('ALTER TABLE images CHANGE name_image name_image VARCHAR(255) DEFAULT NULL, CHANGE alt alt VARCHAR(255) DEFAULT NULL, CHANGE description_image description_image VARCHAR(255) DEFAULT NULL, CHANGE sort_order sort_order INT DEFAULT NULL');
        $this->addSql('ALTER TABLE youtubevideos CHANGE you_tube_id you_tube_id VARCHAR(255) DEFAULT NULL, CHANGE title title VARCHAR(255) DEFAULT NULL, CHANGE duration duration VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE youtubeimages CHANGE youtube_id youtube_id INT DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT NULL, CHANGE url url VARCHAR(255) DEFAULT NULL, CHANGE width width INT DEFAULT NULL, CHANGE height height INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE salutation salutation INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('DROP INDEX Index 1 ON event_categories');
        $this->addSql('ALTER TABLE event_categories ADD file_id INT DEFAULT NULL, ADD created_by INT DEFAULT NULL, ADD changed_by INT DEFAULT NULL, ADD deleted_by INT DEFAULT NULL, ADD name VARCHAR(255) NOT NULL, ADD description TINYTEXT DEFAULT NULL, ADD date_created DATETIME NOT NULL, ADD date_changed DATETIME DEFAULT NULL, ADD date_deleted DATETIME DEFAULT NULL, ADD deleted INT DEFAULT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE event_categories ADD CONSTRAINT FK_621D9F4793CB796C FOREIGN KEY (file_id) REFERENCES file (id)');
        $this->addSql('ALTER TABLE event_categories ADD CONSTRAINT FK_621D9F47DE12AB56 FOREIGN KEY (created_by) REFERENCES user (id)');
        $this->addSql('ALTER TABLE event_categories ADD CONSTRAINT FK_621D9F4710BC6D9F FOREIGN KEY (changed_by) REFERENCES user (id)');
        $this->addSql('ALTER TABLE event_categories ADD CONSTRAINT FK_621D9F471F6FA0AF FOREIGN KEY (deleted_by) REFERENCES user (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_621D9F4793CB796C ON event_categories (file_id)');
        $this->addSql('CREATE INDEX IDX_621D9F47DE12AB56 ON event_categories (created_by)');
        $this->addSql('CREATE INDEX IDX_621D9F4710BC6D9F ON event_categories (changed_by)');
        $this->addSql('CREATE INDEX IDX_621D9F471F6FA0AF ON event_categories (deleted_by)');
        $this->addSql('ALTER TABLE events CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE category_id category_id INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL, CHANGE imageId imageId INT DEFAULT NULL');
        $this->addSql('ALTER TABLE checklistitems CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE check_list_id check_list_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE checklistfieldtypes CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE checklistfields CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE check_list_id check_list_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE check_list_field_type_id check_list_field_type_id INT DEFAULT NULL, CHANGE sort_order sort_order INT DEFAULT NULL, CHANGE required required INT DEFAULT NULL, CHANGE required_message required_message VARCHAR(255) DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL, CHANGE options options VARCHAR(2555) DEFAULT NULL');
        $this->addSql('ALTER TABLE checklists CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE answer CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE answer_given CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE checklist_field_id checklist_field_id INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE checklist_item_id checklist_item_id INT DEFAULT NULL, CHANGE answer_id answer_id INT DEFAULT NULL, CHANGE checklist_id checklist_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rounds DROP FOREIGN KEY FK_3A7FD55481C06096');
        $this->addSql('ALTER TABLE rounds CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE activity_id activity_id INT NOT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE split split INT DEFAULT NULL, CHANGE average_speed average_speed DOUBLE PRECISION DEFAULT NULL, CHANGE average_heartrate average_heartrate DOUBLE PRECISION DEFAULT NULL, CHANGE pace_zone pace_zone INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rounds ADD CONSTRAINT FK_3A7FD55481C06096 FOREIGN KEY (activity_id) REFERENCES activities (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE activities CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE import_log_id import_log_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE start_lat start_lat DOUBLE PRECISION DEFAULT NULL, CHANGE start_lng start_lng DOUBLE PRECISION DEFAULT NULL, CHANGE end_lat end_lat DOUBLE PRECISION DEFAULT NULL, CHANGE end_lng end_lng DOUBLE PRECISION DEFAULT NULL, CHANGE average_speed average_speed DOUBLE PRECISION DEFAULT NULL, CHANGE max_speed max_speed DOUBLE PRECISION DEFAULT NULL, CHANGE average_heartrate average_heartrate DOUBLE PRECISION DEFAULT NULL, CHANGE max_heartrate max_heartrate DOUBLE PRECISION DEFAULT NULL, CHANGE elev_high elev_high DOUBLE PRECISION DEFAULT NULL, CHANGE elev_low elev_low DOUBLE PRECISION DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL, CHANGE workout_type workout_type INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activity_import_log CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT NULL, CHANGE date_deleted date_deleted DATETIME DEFAULT NULL, CHANGE deleted deleted INT DEFAULT NULL');
    }

    /**
     * @param Schema $schema
     */
    public function down(Schema $schema)
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE activities CHANGE import_log_id import_log_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE workout_type workout_type INT DEFAULT NULL, CHANGE start_lat start_lat DOUBLE PRECISION DEFAULT \'NULL\', CHANGE start_lng start_lng DOUBLE PRECISION DEFAULT \'NULL\', CHANGE end_lat end_lat DOUBLE PRECISION DEFAULT \'NULL\', CHANGE end_lng end_lng DOUBLE PRECISION DEFAULT \'NULL\', CHANGE average_speed average_speed DOUBLE PRECISION DEFAULT \'NULL\', CHANGE max_speed max_speed DOUBLE PRECISION DEFAULT \'NULL\', CHANGE average_heartrate average_heartrate DOUBLE PRECISION DEFAULT \'NULL\', CHANGE max_heartrate max_heartrate DOUBLE PRECISION DEFAULT \'NULL\', CHANGE elev_high elev_high DOUBLE PRECISION DEFAULT \'NULL\', CHANGE elev_low elev_low DOUBLE PRECISION DEFAULT \'NULL\', CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE activity_import_log CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agenda CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE whole_day whole_day INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE agenda_item CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE description description VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE whole_day whole_day INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE answer CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE answer_given CHANGE checklist_id checklist_id INT DEFAULT NULL, CHANGE checklist_item_id checklist_item_id INT DEFAULT NULL, CHANGE checklist_field_id checklist_field_id INT DEFAULT NULL, CHANGE answer_id answer_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE blog CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE tweet_id tweet_id VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE date_online date_online DATETIME DEFAULT \'NULL\', CHANGE date_offline date_offline DATETIME DEFAULT \'NULL\', CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE blogimages CHANGE name_image name_image VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE alt alt VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE description_image description_image VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE sort_order sort_order INT DEFAULT NULL');
        $this->addSql('ALTER TABLE checklistfields CHANGE check_list_id check_list_id INT DEFAULT NULL, CHANGE check_list_field_type_id check_list_field_type_id INT DEFAULT NULL, CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE sort_order sort_order INT DEFAULT NULL, CHANGE required required INT DEFAULT NULL, CHANGE options options VARCHAR(2555) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE required_message required_message VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE checklistfieldtypes CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE checklistitems CHANGE check_list_id check_list_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE checklists CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE comments CHANGE blog_id blog_id INT DEFAULT NULL, CHANGE parent_id parent_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE contact CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE salutation salutation INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE event_categories MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE event_categories DROP INDEX primary, ADD INDEX Index 1 (id)');
        $this->addSql('ALTER TABLE event_categories DROP FOREIGN KEY FK_621D9F4793CB796C');
        $this->addSql('ALTER TABLE event_categories DROP FOREIGN KEY FK_621D9F47DE12AB56');
        $this->addSql('ALTER TABLE event_categories DROP FOREIGN KEY FK_621D9F4710BC6D9F');
        $this->addSql('ALTER TABLE event_categories DROP FOREIGN KEY FK_621D9F471F6FA0AF');
        $this->addSql('DROP INDEX UNIQ_621D9F4793CB796C ON event_categories');
        $this->addSql('DROP INDEX IDX_621D9F47DE12AB56 ON event_categories');
        $this->addSql('DROP INDEX IDX_621D9F4710BC6D9F ON event_categories');
        $this->addSql('DROP INDEX IDX_621D9F471F6FA0AF ON event_categories');
        $this->addSql('ALTER TABLE event_categories DROP file_id, DROP created_by, DROP changed_by, DROP deleted_by, DROP name, DROP description, DROP date_created, DROP date_changed, DROP date_deleted, DROP deleted, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE events CHANGE category_id category_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL, CHANGE imageId imageId INT DEFAULT NULL');
        $this->addSql('ALTER TABLE file CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE images CHANGE name_image name_image VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE alt alt VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE description_image description_image VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE sort_order sort_order INT DEFAULT NULL');
        $this->addSql('ALTER TABLE imagetypes CHANGE width width INT DEFAULT NULL, CHANGE height height INT DEFAULT NULL');
        $this->addSql('ALTER TABLE permission CHANGE date_created date_created DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE rounds DROP FOREIGN KEY FK_3A7FD55481C06096');
        $this->addSql('ALTER TABLE rounds CHANGE activity_id activity_id INT DEFAULT NULL, CHANGE created_by created_by INT DEFAULT NULL, CHANGE changed_by changed_by INT DEFAULT NULL, CHANGE deleted_by deleted_by INT DEFAULT NULL, CHANGE split split INT DEFAULT NULL, CHANGE average_speed average_speed DOUBLE PRECISION DEFAULT \'NULL\', CHANGE average_heartrate average_heartrate DOUBLE PRECISION DEFAULT \'NULL\', CHANGE pace_zone pace_zone INT DEFAULT NULL, CHANGE date_changed date_changed DATETIME DEFAULT \'NULL\', CHANGE date_deleted date_deleted DATETIME DEFAULT \'NULL\', CHANGE deleted deleted INT DEFAULT NULL');
        $this->addSql('ALTER TABLE rounds ADD CONSTRAINT FK_3A7FD55481C06096 FOREIGN KEY (activity_id) REFERENCES activities (id)');
        $this->addSql('ALTER TABLE user CHANGE pwd_reset_token pwd_reset_token VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE pwd_reset_token_creation_date pwd_reset_token_creation_date DATETIME DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE youtubeimages CHANGE youtube_id youtube_id INT DEFAULT NULL, CHANGE type type VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE url url VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE width width INT DEFAULT NULL, CHANGE height height INT DEFAULT NULL');
        $this->addSql('ALTER TABLE youtubevideos CHANGE you_tube_id you_tube_id VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE title title VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci, CHANGE duration duration VARCHAR(255) DEFAULT \'NULL\' COLLATE utf8_unicode_ci');
    }
}