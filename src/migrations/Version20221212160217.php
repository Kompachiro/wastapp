<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221212160217 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chat (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE message (id INT AUTO_INCREMENT NOT NULL, sender_id INT NOT NULL, recipient_id INT NOT NULL, title VARCHAR(255) NOT NULL, message LONGTEXT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', is_read TINYINT(1) NOT NULL, INDEX IDX_B6BD307FF624B39D (sender_id), INDEX IDX_B6BD307FE92F8F78 (recipient_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE particpant (id INT AUTO_INCREMENT NOT NULL, user_id_id INT NOT NULL, INDEX IDX_D7DCBB549D86650F (user_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE particpant_chat (particpant_id INT NOT NULL, chat_id INT NOT NULL, INDEX IDX_75B2BDAD85A0AA07 (particpant_id), INDEX IDX_75B2BDAD1A9A7125 (chat_id), PRIMARY KEY(particpant_id, chat_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, participant_one_id INT NOT NULL, participant_two_id INT NOT NULL, username VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649F85E0677 (username), INDEX IDX_8D93D64949E67092 (participant_one_id), INDEX IDX_8D93D64922BA975D (participant_two_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FF624B39D FOREIGN KEY (sender_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE message ADD CONSTRAINT FK_B6BD307FE92F8F78 FOREIGN KEY (recipient_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE particpant ADD CONSTRAINT FK_D7DCBB549D86650F FOREIGN KEY (user_id_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE particpant_chat ADD CONSTRAINT FK_75B2BDAD85A0AA07 FOREIGN KEY (particpant_id) REFERENCES particpant (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE particpant_chat ADD CONSTRAINT FK_75B2BDAD1A9A7125 FOREIGN KEY (chat_id) REFERENCES chat (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64949E67092 FOREIGN KEY (participant_one_id) REFERENCES chat (id)');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D64922BA975D FOREIGN KEY (participant_two_id) REFERENCES chat (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FF624B39D');
        $this->addSql('ALTER TABLE message DROP FOREIGN KEY FK_B6BD307FE92F8F78');
        $this->addSql('ALTER TABLE particpant DROP FOREIGN KEY FK_D7DCBB549D86650F');
        $this->addSql('ALTER TABLE particpant_chat DROP FOREIGN KEY FK_75B2BDAD85A0AA07');
        $this->addSql('ALTER TABLE particpant_chat DROP FOREIGN KEY FK_75B2BDAD1A9A7125');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64949E67092');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D64922BA975D');
        $this->addSql('DROP TABLE chat');
        $this->addSql('DROP TABLE message');
        $this->addSql('DROP TABLE particpant');
        $this->addSql('DROP TABLE particpant_chat');
        $this->addSql('DROP TABLE user');
    }
}
