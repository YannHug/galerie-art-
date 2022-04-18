<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220418124344 extends AbstractMigration
{
    public function getDescription(): string
    {
        return 'creation des oeuvres';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE oeuvre (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, largeur NUMERIC(10, 2) DEFAULT NULL, hauteur NUMERIC(10, 2) DEFAULT NULL, profondeur NUMERIC(10, 2) DEFAULT NULL, en_vente TINYINT(1) NOT NULL, prix NUMERIC(10, 2) DEFAULT NULL, date_realisation DATETIME DEFAULT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', description LONGTEXT DEFAULT NULL, portfolio TINYINT(1) NOT NULL, slug VARCHAR(255) NOT NULL, file VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE oeuvre');
    }
}
