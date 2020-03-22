<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200322114914 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE department (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE edition (id INT AUTO_INCREMENT NOT NULL, event_id INT NOT NULL, department_id INT NOT NULL, date DATETIME DEFAULT NULL, place VARCHAR(255) DEFAULT NULL, lodging VARCHAR(255) DEFAULT NULL, transport VARCHAR(255) DEFAULT NULL, best_seller VARCHAR(255) DEFAULT NULL, worst_seller VARCHAR(255) DEFAULT NULL, notes VARCHAR(255) DEFAULT NULL, pickup_place VARCHAR(255) DEFAULT NULL, pickup_date DATETIME DEFAULT NULL, load_date DATETIME DEFAULT NULL, departure DATETIME DEFAULT NULL, return_date DATETIME DEFAULT NULL, INDEX IDX_A891181F71F7E88B (event_id), INDEX IDX_A891181FAE80F5DF (department_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE edition ADD CONSTRAINT FK_A891181F71F7E88B FOREIGN KEY (event_id) REFERENCES event (id)');
        $this->addSql('ALTER TABLE edition ADD CONSTRAINT FK_A891181FAE80F5DF FOREIGN KEY (department_id) REFERENCES department (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE edition DROP FOREIGN KEY FK_A891181FAE80F5DF');
        $this->addSql('DROP TABLE department');
        $this->addSql('DROP TABLE edition');
    }
}
