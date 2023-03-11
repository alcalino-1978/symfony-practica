<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230310105829 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE sitios (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE animal ADD sitio_id INT NOT NULL, ADD nombre VARCHAR(255) NOT NULL, ADD nacimiento DATETIME DEFAULT NULL');
        $this->addSql('ALTER TABLE animal ADD CONSTRAINT FK_6AAB231FA707E1B0 FOREIGN KEY (sitio_id) REFERENCES sitios (id)');
        $this->addSql('CREATE INDEX IDX_6AAB231FA707E1B0 ON animal (sitio_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE animal DROP FOREIGN KEY FK_6AAB231FA707E1B0');
        $this->addSql('DROP TABLE sitios');
        $this->addSql('DROP INDEX IDX_6AAB231FA707E1B0 ON animal');
        $this->addSql('ALTER TABLE animal DROP sitio_id, DROP nombre, DROP nacimiento');
    }
}
