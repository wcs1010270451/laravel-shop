<?php

return [
    'alipay' => [
        'app_id'         => '2016072800111435',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqy1im0pRLSmBxgbWLwVMR+bYLCkM7dJBuAf6NVqa5TLuwtGRFVODRiEfAfQ9Oe7iuYOntXqAqs1LfWn2mrDbOXwKqRnGP5HILzzlPUF81ok9AZT75PjltqEVOmjMDaZra29yHp8MQ7ISVuWkT4hwmPtUheC2+lOto7B7jHpKikO8bGfAgE6WIGGNBmmjmMNavCfnIldwndpihCXpwy3Pj0ZrvbcDsYgxYRv06MKqJv8xGOomKH/3FCVFZ3CqbEAU7K3dcPXvl5vsxD9Kb4LnRIfJ288l+gUxva9x1JHPa39t7HM263sH3KAwIxZbD0kFp2Or4XeO0mQ/G1hIh62MowIDAQAB
',
        'private_key'    => 'MIIEowIBAAKCAQEA4Df1PX+BjPi8AxE1KxYI9JRXzG51rd361Us6Hfk3TCHnq2NF1mqS0zHVqO8LvVX4xdXU0vgUdLIUmeHkz6CduzlxQfMP6QsMARaDs+AhrvHeUL5aYd06YY5TFgGMcfZDVG8QhdTERVQAbUV1X7vziDjK1uqRDg7YaQDZp/bFZe66Ec9k87YPH0u0WLc4SARnzd0Tks3KzbcWPEBDBdKTk75nTmB1PSEFXJvGCrROPMkQY9hSs+wnsZg0bcMnjMol6agSpBYs1361/MQ4l+9rcpMvPF5h1WQ4dRYg9TMKQ5R24Vdg/s4k+pdEXk+siz6LcdsLbuB9F7NXKO+SLJ0p+wIDAQABAoIBAB5RssnUGhKT9+h6RTREUIWyIYU1UphmMerxtzQiZQXYd9lHHUR3OM9yJ7AmUvIRVAh8d8DnZuy4v+xnDWe+ElYk2FnQolAi/EaRYtHJ9wQPFL7aXqJpJeHXOwj4wKMQZ95c/mD6emfdigk8oTiG09GRzGvvYBoEi+L3CHeb+Ollc7ofOBSxVVV3SZgr00xzn0glgMJ3uh5DTgssidP+hsz0TON8pGxky4W9XYEKwrfMfowSkXPaMxiAz1gyFLDr40wsilu8IbV2iLEHfq8Ji3yxvD7MFjyXSkEIzGQLadA2o6zIW5wHpCv+PGV3xSmjXZLXw6n7abdhADk0b65h1rECgYEA/3vs2rIPvZdabDzkvL5CrARoPpc53p6gdy2c2mbq+/8sfs/AU2OBjTkMdSv7qIkqXSs2VnDK7luzwo7PG5+DKpB4oK0WUTbyKhiBi9SkDm9v4tJe3yvDz8Mu9x4qd6zv0eYiSwUgPpO+h7bu+pcUHVeiO6b/ttKQ7pLfBR5l5z0CgYEA4Kveqc3UBH6B3H1rqKb21hTFoffsiDvfjZhqETEuHLVarhcqGdjk+Yn4Bo9UwvoviAwOYnQiAWOlPl1SxYc69VaISZKD1OETj8Zxew+qgNNhb99UPHJZjXzzbaSo2Atkk1GjMXcDsJDz4Tvao7NTwwZ7aUuwXjHf69gynM3tKZcCgYEA+rtmgmMKK6kkpuFEIzAeQq+4luTXeHH5Tb1IGNe0eke+JV5ChBQ+CpkYbs4Rlx+2oeVM2JytrCv3SVPaUmPD2LwchqQYKPBhzYpraQ3xS/F1vwdy8FcFPxtxNjk2uGjSnA7dTP7k3EUnUg3oj6pBpWJh52VHxOb2Mg2WLnHc1IkCgYAuGhZusZW39l2faP0WdmxgMZL8UWtv6RlObOAW9wiHS493+bjh5OfXbMBAWFkESWJHgHHTMhFoR5I44d2COuWWQlNlBXOX0ze4YPgYUHakSLvNwP4ACVbm+aTZ8tfSvUO+FxptpAZVzOi+ZxHOVZXyhvn7+VQPgBx6wLpiAr+PsQKBgEL+d9P6WG0BphuVqeDirL7ei5q69RhJ4JrEsz3MMMdGQ+/nsP8PUu1wDeu4d1jLokQgnmVu16zLUtyMzn+9W1wJyAUjX+llQPXdqJaZK/CVufHKPcDb0dMiHCofOfaNaZ4sg1qe+Lu1OknMu4RBM2MrexYQKQ2bLyc5zaoqcX+r',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];