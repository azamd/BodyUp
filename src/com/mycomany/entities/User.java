/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycomany.entities;

/**
 *
 * @author Geek
 */
public class User {
public String first_name;
 public String email;
 public String level;
 public String city;
 public String phone;
 public String zip;
 public String state;
 public String gender;
 public String adress;
 public String id;
 public String username;
 public String password;

    public User() {
    }

    public User(String first_name, String email, String level, String city, String phone, String zip, String state, String gender, String adress, String id, String username, String password) {
        this.first_name = first_name;
        this.email = email;
        this.level = level;
        this.city = city;
        this.phone = phone;
        this.zip = zip;
        this.state = state;
        this.gender = gender;
        this.adress = adress;
        this.id = id;
        this.username = username;
        this.password = password;
    }

    public String getFirst_name() {
        return first_name;
    }

    public String getEmail() {
        return email;
    }

    public String getLevel() {
        return level;
    }

    public String getCity() {
        return city;
    }

    public String getPhone() {
        return phone;
    }

    public String getZip() {
        return zip;
    }

    public String getState() {
        return state;
    }

    public String getGender() {
        return gender;
    }

    public String getAdress() {
        return adress;
    }

    public String getId() {
        return id;
    }

    public String getUsername() {
        return username;
    }

    public String getPassword() {
        return password;
    }

    public void setFirst_name(String first_name) {
        this.first_name = first_name;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public void setLevel(String level) {
        this.level = level;
    }

    public void setCity(String city) {
        this.city = city;
    }

    public void setPhone(String phone) {
        this.phone = phone;
    }

    public void setZip(String zip) {
        this.zip = zip;
    }

    public void setState(String state) {
        this.state = state;
    }

    public void setGender(String gender) {
        this.gender = gender;
    }

    public void setAdress(String adress) {
        this.adress = adress;
    }

    public void setId(String id) {
        this.id = id;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public void setPassword(String password) {
        this.password = password;
    }
 
 







}
