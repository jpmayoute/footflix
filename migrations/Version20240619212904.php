<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240619212904 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE palmares_number (palmares_id INT NOT NULL, number_id INT NOT NULL, INDEX IDX_47EBD03B804A4B7D (palmares_id), INDEX IDX_47EBD03B30A1DE10 (number_id), PRIMARY KEY(palmares_id, number_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE palmares_number ADD CONSTRAINT FK_47EBD03B804A4B7D FOREIGN KEY (palmares_id) REFERENCES palmares (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE palmares_number ADD CONSTRAINT FK_47EBD03B30A1DE10 FOREIGN KEY (number_id) REFERENCES number (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE palmares_number DROP FOREIGN KEY FK_47EBD03B804A4B7D');
        $this->addSql('ALTER TABLE palmares_number DROP FOREIGN KEY FK_47EBD03B30A1DE10');
        $this->addSql('DROP TABLE palmares_number');
    }
}
