<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190726154235 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE versement (id INT AUTO_INCREMENT NOT NULL, partenaire_id INT DEFAULT NULL, caissier_id INT NOT NULL, type VARCHAR(255) NOT NULL, solde INT NOT NULL, INDEX IDX_716E936798DE13AC (partenaire_id), INDEX IDX_716E9367B514973B (caissier_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sous_partenaire (id INT AUTO_INCREMENT NOT NULL, partenaire_id INT DEFAULT NULL, identifiant VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, nom_complet VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, numero_identite INT NOT NULL, contact INT NOT NULL, login VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_D487F69998DE13AC (partenaire_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE admin_systeme (id INT AUTO_INCREMENT NOT NULL, nom_complet VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE identifiant (id INT AUTO_INCREMENT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE partenaire (id INT AUTO_INCREMENT NOT NULL, admin_systeme_id INT DEFAULT NULL, identifiant VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, numeroidentite INT NOT NULL, contact INT NOT NULL, login VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_32FFA373FC51D1AB (admin_systeme_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE caissier (id INT AUTO_INCREMENT NOT NULL, admin_systeme_id INT DEFAULT NULL, identite VARCHAR(255) NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, adresse VARCHAR(255) NOT NULL, contact INT NOT NULL, numero_identite INT NOT NULL, login VARCHAR(255) NOT NULL, motdepasse VARCHAR(255) NOT NULL, INDEX IDX_1F038BC2FC51D1AB (admin_systeme_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE versement ADD CONSTRAINT FK_716E936798DE13AC FOREIGN KEY (partenaire_id) REFERENCES partenaire (id)');
        $this->addSql('ALTER TABLE versement ADD CONSTRAINT FK_716E9367B514973B FOREIGN KEY (caissier_id) REFERENCES caissier (id)');
        $this->addSql('ALTER TABLE sous_partenaire ADD CONSTRAINT FK_D487F69998DE13AC FOREIGN KEY (partenaire_id) REFERENCES partenaire (id)');
        $this->addSql('ALTER TABLE partenaire ADD CONSTRAINT FK_32FFA373FC51D1AB FOREIGN KEY (admin_systeme_id) REFERENCES admin_systeme (id)');
        $this->addSql('ALTER TABLE caissier ADD CONSTRAINT FK_1F038BC2FC51D1AB FOREIGN KEY (admin_systeme_id) REFERENCES admin_systeme (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE partenaire DROP FOREIGN KEY FK_32FFA373FC51D1AB');
        $this->addSql('ALTER TABLE caissier DROP FOREIGN KEY FK_1F038BC2FC51D1AB');
        $this->addSql('ALTER TABLE versement DROP FOREIGN KEY FK_716E936798DE13AC');
        $this->addSql('ALTER TABLE sous_partenaire DROP FOREIGN KEY FK_D487F69998DE13AC');
        $this->addSql('ALTER TABLE versement DROP FOREIGN KEY FK_716E9367B514973B');
        $this->addSql('DROP TABLE versement');
        $this->addSql('DROP TABLE sous_partenaire');
        $this->addSql('DROP TABLE admin_systeme');
        $this->addSql('DROP TABLE identifiant');
        $this->addSql('DROP TABLE partenaire');
        $this->addSql('DROP TABLE caissier');
    }
}
