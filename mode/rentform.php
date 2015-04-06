<?php

class mode_rentform extends base_mode
{
    const Q_INSERT = "INSERT INTO gulden_site.rent_form
                      (contact_name, contact_organization,
                      contact_phone, contact_mail, size_min,
                      size_max, amount_payment, tenement, comment)
                      VALUES
                      (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    function process()
    {
        if(!$_REQUEST)
            return;
        $data = $this->prepare_query(helpers::validate($_REQUEST));
        db()->prepare(self::Q_INSERT)->execute($data);
    }

    function prepare_query($data)
    {
        $data['contactPhoneNumber'] = $data['contactPhoneCode'].$data['contactPhoneNumber'];
        unset($data['contactPhoneCode']);

        return array_values($data);
    }
}