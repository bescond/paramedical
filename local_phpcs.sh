CHECKPATH="./"
if [ "$1" != "" ] 
then
    CHECKPATH="$1"
fi

phpcs --extensions=php --standard='ruleset.xml' --report=csv --report-csv=./log/checkstyle.csv --report-xml=./log/checkstyle.xml -p "$CHECKPATH"
more ./log/checkstyle.csv