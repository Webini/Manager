<?php

namespace Wini\Manager;

/**
 * @author nico
 */
interface FlushManagerInterface {
    /**
     * Getter / Setter
     * Si $flush est définit on est en setter, et on prévient notre manager qu'il
     * ne doit pas flusher la prochaine req
     * Si pas de $flush ca retourne si l'ont doit flusher ou non puis repasse
     * la valeur de $flush a true par defaut jusqu'au prochain call avec un param
     * a shouldFlush
     * @param bool $flush
     * @return bool|$this si on a un param $this est retourné pour chainer
     */
    public function shouldFlush($flush = null);
}
