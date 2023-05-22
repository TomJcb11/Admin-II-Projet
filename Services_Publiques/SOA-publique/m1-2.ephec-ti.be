$ORIGIN m1-2.ephec-ti.be.
$TTL 86400
@    IN     SOA    ns.m1-2.ephec-ti.be.     hostmaster.m1-2.ephec-ti.be. (
                    2001062501 ; serial
                    21600      ; refresh after 6 hours
                    3600       ; retry after 1 hour
                    604800     ; expire after 1 week
                    86400 )    ; minimum TTL of 1 day

@      IN     NS     ns.m1-2.ephec-ti.be.



ns              IN     A       51.144.126.228
www             IN     A       51.144.126.228
b2b             IN     A       51.144.126.228
mail            IN     A       51.144.126.228



@      IN     MX     10     mail.m1-2.ephec-ti.be.
@      IN     TXT    "v=spf1 mx  -all"
_domainkey            IN     TXT    "o=~;"
s1._domainkey   IN   TXT  "v=DKIM1; k=rsa; p=MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQC6MdioCARzsTNWpQu9pftNdtXv/3S2HQy0zmrCyOJ8EPxaQXu0812V17++F1/tnGQC2h1178xEsOLZG8S0t7SZjQK/29ODg93Om9vs3VxSXH6tYxwfCZwICnt2nH3/THeGK7IeZRn2IVCVUFKr2po2wu1o7gad3uUmFoQ+YN5+8QIDAQAB"
_DMARC  3600  IN   TXT    "v=DMARC1; p=quarantine;pct=100; rua=mailto:dmarc@m1-2.ephec-ti.be;ruf=mailto:dmarc@m1-2.ephec-ti.be; fo=1"

