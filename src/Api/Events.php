<?php
declare(strict_types=1);

namespace MusheAbdulHakim\CoinGecko\Api;

use MusheAbdulHakim\CoinGecko\Request;

class Events extends Request
{

    /**
     * @param array $params
     * @return array
     * @throws Exception
     */
    public function getEvents(array $params = []): array
    {
        return $this->get('/events', $params);
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getCountries(): array
    {
        return $this->get('/events/countries');
    }

    /**
     * @return array
     * @throws Exception
     */
    public function getTypes(): array
    {
        return $this->get('/events/types');
    }
}
