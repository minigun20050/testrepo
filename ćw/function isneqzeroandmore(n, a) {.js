function isneqzeroandmore(n, a) {
    if (n<=0) {
        return ("n cannot be 0 or less and must be ...")
    } else {
        return (n * (n+1) * (n+2) / a)
    }
}
isneqzeroandmore(4, 6)