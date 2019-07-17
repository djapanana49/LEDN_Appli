<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190717191818 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE adherents (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(50) NOT NULL, prenom VARCHAR(50) NOT NULL, string VARCHAR(150) NOT NULL, telephone VARCHAR(20) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reunions (id INT AUTO_INCREMENT NOT NULL, adherent_id INT NOT NULL, date DATETIME NOT NULL, UNIQUE INDEX UNIQ_18E32DA325F06C53 (adherent_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE sujets (id INT AUTO_INCREMENT NOT NULL, reunion_id INT NOT NULL, sujet_texte LONGTEXT NOT NULL, valide TINYINT(1) NOT NULL, INDEX IDX_959E33AB4E9B7368 (reunion_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reunions ADD CONSTRAINT FK_18E32DA325F06C53 FOREIGN KEY (adherent_id) REFERENCES adherents (id)');
        $this->addSql('ALTER TABLE sujets ADD CONSTRAINT FK_959E33AB4E9B7368 FOREIGN KEY (reunion_id) REFERENCES reunions (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE reunions DROP FOREIGN KEY FK_18E32DA325F06C53');
        $this->addSql('ALTER TABLE sujets DROP FOREIGN KEY FK_959E33AB4E9B7368');
        $this->addSql('DROP TABLE adherents');
        $this->addSql('DROP TABLE reunions');
        $this->addSql('DROP TABLE sujets');
    }
}
