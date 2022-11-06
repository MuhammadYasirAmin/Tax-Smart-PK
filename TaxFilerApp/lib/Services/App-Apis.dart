// ignore_for_file: file_names, non_constant_identifier_names, prefer_const_declarations, unused_import, deprecated_member_use, prefer_const_constructors, no_leading_underscores_for_local_identifiers
import 'dart:convert';

import 'package:flutter/material.dart';
import 'package:http/http.dart' as http;

class IntegrateApis {
  final login_Api = 'https://taxsmartpk.com/api/login';
  final register_Api = 'https://taxsmartpk.com/api/register';

  Future<String> login(_userEmail, _userPassword) async {
    try {
      final response = await http.post(Uri.parse(login_Api), body: {
        'UserEmail': _userEmail,
        'UserPassword': _userPassword,
      });
      print(response);

      if (response.statusCode == 200) {
        final result = json.decode(response.body);
        return result;
      } else {
        return 'Server Error';
      }
    } catch (e) {
      return e.toString();
    }
  }

  Future<String> register(
      _userEmail, _userPassword, _userPhone, _userCnic, _userName) async {
    try {
      final response = await http.post(Uri.parse(register_Api), body: {
        'UserEmail': _userEmail,
        'UserPassword': _userPassword,
        'UserPhone': _userPhone,
        'UserCnic': _userCnic,
        'UserName': _userName,
      });
      if (response.statusCode == 200) {
        final result = json.decode(response.body);
        return response.statusCode.toString();
      } else {
        return 'Server Error';
      }
    } catch (e) {
      return e.toString();
    }
  }
}
