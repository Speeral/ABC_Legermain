<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211205204442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponseoffre ADD lettre VARCHAR(255) NOT NULL, CHANGE competences cv VARCHAR(255) NOT NULL');
        $this->addSql('ALTER TABLE reponseoffre ADD CONSTRAINT FK_CEC8BF37E61D1857 FOREIGN KEY (idoffre_id) REFERENCES offreemploi (id)');
        $this->addSql('CREATE INDEX IDX_CEC8BF37E61D1857 ON reponseoffre (idoffre_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reponseoffre DROP FOREIGN KEY FK_CEC8BF37E61D1857');
        $this->addSql('DROP INDEX IDX_CEC8BF37E61D1857 ON reponseoffre');
        $this->addSql('ALTER TABLE reponseoffre ADD competences VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP cv, DROP lettre');
    }
}