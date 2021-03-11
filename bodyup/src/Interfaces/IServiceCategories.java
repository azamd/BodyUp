/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Interfaces;

import Entities.Categories;
import java.sql.SQLException;
import java.util.List;
import javafx.collections.ObservableList;

/**
 *
 * @author aziz
 */
public interface IServiceCategories {
    public void addCategories(Categories C);
    public void updateCategories(Categories C);
    public void deleteCategories(Categories C);
    //public ObservableList<Categories> getCatList();
    //public List<Categories> displayCategories()throws SQLException;
}
