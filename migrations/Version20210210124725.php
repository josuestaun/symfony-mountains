<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210210124725 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE mountains (id INT AUTO_INCREMENT NOT NULL, zona_id INT DEFAULT NULL, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, altura INT NOT NULL, desnivel INT NOT NULL, imagen VARCHAR(255) NOT NULL, INDEX IDX_34FC1185104EA8FC (zona_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuario_sube (id INT AUTO_INCREMENT NOT NULL, usuario_id INT DEFAULT NULL, mountain_id INT DEFAULT NULL, INDEX IDX_99D9C37DB38439E (usuario_id), INDEX IDX_99D9C37A22AA0D4 (mountain_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE usuarios (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zonas (id INT AUTO_INCREMENT NOT NULL, pais VARCHAR(255) NOT NULL, provincia VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE mountains ADD CONSTRAINT FK_34FC1185104EA8FC FOREIGN KEY (zona_id) REFERENCES zonas (id)');
        $this->addSql('ALTER TABLE usuario_sube ADD CONSTRAINT FK_99D9C37DB38439E FOREIGN KEY (usuario_id) REFERENCES usuarios (id)');
        $this->addSql('ALTER TABLE usuario_sube ADD CONSTRAINT FK_99D9C37A22AA0D4 FOREIGN KEY (mountain_id) REFERENCES mountains (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE usuario_sube DROP FOREIGN KEY FK_99D9C37A22AA0D4');
        $this->addSql('ALTER TABLE usuario_sube DROP FOREIGN KEY FK_99D9C37DB38439E');
        $this->addSql('ALTER TABLE mountains DROP FOREIGN KEY FK_34FC1185104EA8FC');
        $this->addSql('DROP TABLE mountains');
        $this->addSql('DROP TABLE usuario_sube');
        $this->addSql('DROP TABLE usuarios');
        $this->addSql('DROP TABLE zonas');
    }
}
