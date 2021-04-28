<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210422023054 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation ADD user_id INT NOT NULL');
        $this->addSql('ALTER TABLE reclamation ADD CONSTRAINT FK_CE606404A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('CREATE INDEX IDX_CE606404A76ED395 ON reclamation (user_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reclamation DROP FOREIGN KEY FK_CE606404A76ED395');
        $this->addSql('DROP INDEX IDX_CE606404A76ED395 ON reclamation');
        $this->addSql('ALTER TABLE reclamation DROP user_id');
    }
}
