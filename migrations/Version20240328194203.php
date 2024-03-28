<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240328194203 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE categoria DROP num_imagenes');
        $this->addSql('ALTER TABLE imagen ADD categoria_id INT DEFAULT NULL, DROP categoria');
        $this->addSql('ALTER TABLE imagen ADD CONSTRAINT FK_8319D2B33397707A FOREIGN KEY (categoria_id) REFERENCES categoria (id)');
        $this->addSql('CREATE INDEX IDX_8319D2B33397707A ON imagen (categoria_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE imagen DROP FOREIGN KEY FK_8319D2B33397707A');
        $this->addSql('DROP INDEX IDX_8319D2B33397707A ON imagen');
        $this->addSql('ALTER TABLE imagen ADD categoria INT NOT NULL, DROP categoria_id');
        $this->addSql('ALTER TABLE categoria ADD num_imagenes INT NOT NULL');
    }
}
