<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220715202654 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE chantiers (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(60) NOT NULL, adresse VARCHAR(255) NOT NULL, date_de_debut DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE pointages (id INT AUTO_INCREMENT NOT NULL, utilisateur_id_id INT NOT NULL, chantier_id_id INT NOT NULL, date_de_pointage DATE NOT NULL, duree_de_pointage TIME NOT NULL, INDEX IDX_2067B6D8B981C689 (utilisateur_id_id), INDEX IDX_2067B6D86C82E9F7 (chantier_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE utilisateurs (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(60) NOT NULL, prenom VARCHAR(60) NOT NULL, matricule INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE pointages ADD CONSTRAINT FK_2067B6D8B981C689 FOREIGN KEY (utilisateur_id_id) REFERENCES utilisateurs (id)');
        $this->addSql('ALTER TABLE pointages ADD CONSTRAINT FK_2067B6D86C82E9F7 FOREIGN KEY (chantier_id_id) REFERENCES chantiers (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE pointages DROP FOREIGN KEY FK_2067B6D86C82E9F7');
        $this->addSql('ALTER TABLE pointages DROP FOREIGN KEY FK_2067B6D8B981C689');
        $this->addSql('DROP TABLE chantiers');
        $this->addSql('DROP TABLE pointages');
        $this->addSql('DROP TABLE utilisateurs');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
