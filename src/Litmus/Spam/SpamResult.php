<?php

namespace Litmus\Spam;

/**
 * SpamResult class
 *
 * @author    Benjamin Laugueux <benjamin@yzalis.com>
 */
class SpamResult
{
    private $SpamScore;
    private $IsSpam;
    private $SpamHeaders;

    /**
     * @param array $params
     */
    public function __construct($params = array())
    {
        $this->SpamHeaders = array();

        if ($params != array()) {
            foreach ($params as $k => $v) {
                $this->{'set' . $k}($v);
            }
        }
    }

    /**
     *
     *
     * @return string
     */
    public function getSpamScore()
    {
        return $this->SpamScore;
    }

    /**
     *
     *
     * @return string
     */
    public function getIsSpam()
    {
        return $this->IsSpam;
    }

    /**
     *
     *
     * @return string
     */
    public function getSpamHeaders()
    {
        return $this->SpamHeaders;
    }

    /**
     *
     *
     * @param string $v The spam score.
     */
    public function setSpamScore($v)
    {
        $this->SpamScore = (double) $v;

        return $this;
    }

    /**
     *
     *
     * @param string $v The spam state.
     */
    public function setIsSpam($v)
    {
        $this->IsSpam = (boolean) $v;

        return $this;
    }

    /**
     *
     *
     * @param string $values The spam headers.
     */
    public function setSpamHeaders($values)
    {
        foreach ($values as $spam_header_params) {
            $this->addSpamHeader(new SpamHeader($spam_header_params));
        }

        return $this;
    }

    /**
     * Add a SpamHeader to the SpamHeaders array
     */
    public function addSpamHeader(SpamHeader $SpamHeader)
    {
        $this->SpamHeaders[] = $SpamHeader;

        return $this;
    }
}
