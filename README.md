# Automated Examination System (AES)

### Web-Based Examination System for Secondary Schools

The **Automated Examination System (AES)** is a web-based examination platform developed to support the administration and delivery of computer-based examinations for secondary schools.

The system was developed to provide a structured digital workflow for managing schools, students, subjects, examiners, examination questions, examinations and results.

---

## Background

The project was developed as an applied software solution for computer-based examination management.

It was subsequently piloted in secondary schools in Akure, Ondo State, including:

- Aquinas College, Akure
- Oyemekun Grammar School, Akure
- Fiwasaye Girls Grammar School, Akure

The pilot provided an opportunity to test the system in an actual school environment and evaluate the workflow around computer-based examinations.

---

## Core Functionality

The system provides separate workflows for different users involved in the examination process.

### Administrator

Administrators can manage core system resources and examination activities, including:

- School management
- Student management
- Subject management
- Examiner management
- Examination setup
- Examination administration
- Examination results
- Result aggregation
- System-level management functions

### Examiner

Examiners have dedicated functionality for managing examination content and reviewing examination activities.

This includes:

- Examiner registration
- Examiner profile management
- Examination setup
- Objective questions
- Theory questions
- Question management
- Examination review
- Result-related functions

### Student

Students have a dedicated examination workflow including:

- Student registration
- Student profile management
- Examination selection
- Objective examinations
- Theory examinations
- Examination navigation
- Examination submission
- Examination results

---

## Examination Types

The system supports both:

### Objective Examinations

The platform provides functionality for:

- Creating objective questions
- Setting objective examinations
- Starting examinations
- Navigating questions
- Processing submitted answers
- Generating objective examination results

### Theory Examinations

The system also supports theory examinations, including:

- Creating theory questions
- Setting theory examinations
- Editing questions
- Processing theory examinations
- Examiner-based review
- Theory examination results

---

## Result Management

The application includes functionality for managing and reviewing examination results.

This includes:

- Objective examination results
- Theory examination results
- Aggregated results
- Examiner result views
- Administrative result views
- Student result access
- Result processing

---

## Search & Management

The system includes search and management functionality for core examination resources, including:

- Schools
- Students
- Subjects
- Examiners
- Examination questions

This provides administrators and examiners with structured access to examination data.

---

## Technology Stack

The application is primarily implemented using:

- PHP
- MySQL
- JavaScript
- jQuery
- HTML
- CSS

The repository contains PHP application modules, CSS, JavaScript, search-related assets and database connection components.

---

## Application Structure

The application is organized around the major roles and workflows of the examination process.

```text
                    Automated Examination System
                              │
              ┌───────────────┼───────────────┐
              │               │               │
          Administrator     Examiner        Student
              │               │               │
       ┌──────┼──────┐    ┌───┼────┐      ┌───┼────┐
       │      │      │    │   │    │      │   │    │
    Schools Students Subjects Questions Exams  Profile Exams
       │      │      │    │   │    │          │
       └──────┴──────┘    └───┴────┘          └───┘
                              │
                       Results Processing
