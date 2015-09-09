<?php

namespace MicroCMS\DAO;

use MicroCMS\Domain\Author;

class AuthorDAO extends DAO
{
    /**
     * Returns the author matching the supplied id.
     *
     * @param integer $id The book id.
     *
     * @return \MicroCMS\Domain\Author|throws an exception if no matching author is found
     */
    public function findByBook($id) {
        $sql1 = "select auth_id from book where book_id=?";
        $row1 = $this->getDb()->fetchAssoc($sql1, array($id));
        $auth_id = $row1['auth_id'];
        $sql = "select * from author where auth_id=?";
        $row = $this->getDb()->fetchAssoc($sql, array($auth_id));
        if ($row) {
            return $this->buildDomainObject($row);
        } else {
            throw new \Exception("No author matching id " . $auth_id);
        }
    }

    /**
     * Creates a Author object based on a DB row.
     *
     * @param array $row The DB row containing Author data.
     * @return \MicroCMS\Domain\Author
     */
    protected function buildDomainObject($row) {
        $author = new Author();
        $author->setId($row['auth_id']);
        $author->setFirstName($row['auth_first_name']);
        $author->setLastName($row['auth_last_name']);
        return $author;
    }
}
