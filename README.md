

```markdown
# Automated Examination System (AES)

### Web-Based Examination System for Secondary Schools

The **Automated Examination System (AES)** is a web-based examination platform developed to support the administration and delivery of computer-based examinations for secondary schools.

The system provides a structured digital workflow for managing schools, students, subjects, examiners, examination questions, examinations, and results.

---

## Background

The project was developed as an applied software solution for computer-based examination management.

It was subsequently piloted in secondary schools in Akure, Ondo State, including:

- Aquinas College, Akure
- Oyemekun Grammar School, Akure
- Fiwasaye Girls Grammar School, Akure

The pilot provided an opportunity to test the examination workflow in an actual school environment.

---

## Core Functionality

The system provides dedicated workflows for the major users involved in the examination process.

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

### Objective Examinations

The platform supports:

- Creating objective questions
- Setting objective examinations
- Starting examinations
- Navigating examination questions
- Processing submitted answers
- Generating objective examination results

### Theory Examinations

The platform also supports theory examinations, including:

- Creating theory questions
- Setting theory examinations
- Editing questions
- Processing theory examinations
- Examiner-based review
- Theory examination results

---

## Result Management

The application provides functionality for managing and reviewing examination results.

This includes:

- Objective examination results
- Theory examination results
- Aggregated results
- Examiner result views
- Administrative result views
- Student result access
- Result processing

---

## Search & Data Management

The system provides search and management functionality for core examination resources, including:

- Schools
- Students
- Subjects
- Examiners
- Examination questions

This provides administrators and examiners with structured access to examination data.

---

## Application Structure

The system is organized around the major roles and workflows of the examination process.

```text
                    Automated Examination System
                              │
              ┌───────────────┼───────────────┐
              │               │               │
          Administrator     Examiner        Student
              │               │               │
       ┌──────┼──────┐    ┌───┼────┐      ┌───┼────┐
       │      │      │    │   │    │      │   │    │
    Schools Students Subjects Questions Exams Profile Exams
       │      │      │    │   │    │          │
       └──────┴──────┘    └───┴────┘          └───┘
                              │
                       Results Processing
