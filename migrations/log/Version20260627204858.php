<?php

declare(strict_types=1);

namespace DoctrineMigrations\Log;

use Doctrine\DBAL\Schema\Schema;
use Florimond\MultiDbMigrationsBundle\Migrations\CustomMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20260627204858 extends CustomMigration
{
    protected ?string $targetDatabase = 'log';

    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE app_logs (id INT AUTO_INCREMENT NOT NULL, app_name VARCHAR(255) NOT NULL, channel VARCHAR(255) NOT NULL, level VARCHAR(10) NOT NULL, message LONGTEXT NOT NULL, context JSON DEFAULT NULL, created_at DATETIME NOT NULL, PRIMARY KEY (id)) DEFAULT CHARACTER SET utf8mb4');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE app_logs');
    }
}
