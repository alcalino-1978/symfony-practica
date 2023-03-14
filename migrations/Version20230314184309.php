<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230314184309 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE datos_personales (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, apellidos VARCHAR(255) NOT NULL, imagen VARCHAR(255) DEFAULT NULL, telefono VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, linkedin VARCHAR(255) DEFAULT NULL, github VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE education (id INT AUTO_INCREMENT NOT NULL, datos_personales_id INT NOT NULL, finalizacion INT NOT NULL, nombre VARCHAR(255) DEFAULT NULL, centro VARCHAR(255) DEFAULT NULL, descripcion VARCHAR(255) NOT NULL, INDEX IDX_DB0A5ED282FDC16B (datos_personales_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE experiencia (id INT AUTO_INCREMENT NOT NULL, datos_personales_id INT DEFAULT NULL, empresa VARCHAR(255) NOT NULL, puesto VARCHAR(255) NOT NULL, periodo VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, INDEX IDX_DD0E303482FDC16B (datos_personales_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE idiomas (id INT AUTO_INCREMENT NOT NULL, datos_personales_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, hablado VARCHAR(255) NOT NULL, escrito VARCHAR(255) NOT NULL, certificacion TINYINT(1) NOT NULL, INDEX IDX_12A54B7E82FDC16B (datos_personales_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE skills (id INT AUTO_INCREMENT NOT NULL, datos_personales_id INT DEFAULT NULL, hard VARCHAR(255) NOT NULL, soft VARCHAR(255) NOT NULL, INDEX IDX_D531167082FDC16B (datos_personales_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE education ADD CONSTRAINT FK_DB0A5ED282FDC16B FOREIGN KEY (datos_personales_id) REFERENCES datos_personales (id)');
        $this->addSql('ALTER TABLE experiencia ADD CONSTRAINT FK_DD0E303482FDC16B FOREIGN KEY (datos_personales_id) REFERENCES datos_personales (id)');
        $this->addSql('ALTER TABLE idiomas ADD CONSTRAINT FK_12A54B7E82FDC16B FOREIGN KEY (datos_personales_id) REFERENCES datos_personales (id)');
        $this->addSql('ALTER TABLE skills ADD CONSTRAINT FK_D531167082FDC16B FOREIGN KEY (datos_personales_id) REFERENCES datos_personales (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE education DROP FOREIGN KEY FK_DB0A5ED282FDC16B');
        $this->addSql('ALTER TABLE experiencia DROP FOREIGN KEY FK_DD0E303482FDC16B');
        $this->addSql('ALTER TABLE idiomas DROP FOREIGN KEY FK_12A54B7E82FDC16B');
        $this->addSql('ALTER TABLE skills DROP FOREIGN KEY FK_D531167082FDC16B');
        $this->addSql('DROP TABLE datos_personales');
        $this->addSql('DROP TABLE education');
        $this->addSql('DROP TABLE experiencia');
        $this->addSql('DROP TABLE idiomas');
        $this->addSql('DROP TABLE skills');
    }
}
