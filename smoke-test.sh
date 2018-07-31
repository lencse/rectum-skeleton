function main {
    php -S localhost:8400 public/index.php &
    local pid=$!
    sleep 3
    vendor/bin/cigar --url=http://localhost:8400/
    local code=$?
    kill -9 $pid
    exit $code
}

main