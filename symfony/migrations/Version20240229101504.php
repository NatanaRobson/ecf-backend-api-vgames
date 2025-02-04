<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240229101504 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE gizmondo (id INT AUTO_INCREMENT NOT NULL, publisher_id_id INT NOT NULL, game VARCHAR(255) NOT NULL, year INT NOT NULL, dev VARCHAR(255) NOT NULL, INDEX IDX_97A931B38AAA43D0 (publisher_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE gizmondo ADD CONSTRAINT FK_97A931B38AAA43D0 FOREIGN KEY (publisher_id_id) REFERENCES publisher (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE gizmondo DROP FOREIGN KEY FK_97A931B38AAA43D0');
        $this->addSql('DROP TABLE gizmondo');
    }
}
