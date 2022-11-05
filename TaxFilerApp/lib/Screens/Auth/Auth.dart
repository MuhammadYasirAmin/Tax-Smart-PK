import 'package:flutter/material.dart';

class Auth extends ChangeNotifier {
  bool _isLoggedIn = false;

  bool get authenticated => _isLoggedIn;

  void logIn(Map creds) {
    _isLoggedIn = true;

    notifyListeners();
  }

  void logOut() {
    _isLoggedIn = false;

    notifyListeners();
  }
}
