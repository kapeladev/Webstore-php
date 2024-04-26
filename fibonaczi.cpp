#include <iostream>
using namespace std;

int main() {
    int n;
    int f0 = 0, f1 = 1, f;

    cout << "witam" << endl;
    cin >> n;

    if (n >= 0) {
        cout << f0;
    }
    if (n >= 1) {
        cout << f1;
    }

    for (int i = 2; i <= n; i++) {
        f = f0 + f1;
        cout << f << " ";
        f0 = f1;
        f1 = f;
    }

    cout << endl;
    return 0;
}
