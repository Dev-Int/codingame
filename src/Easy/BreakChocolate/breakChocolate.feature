Feature: BreakChocolate - Easy
  Scenario Outline:
    Given a chocolate bar you have to split
    When the chocolate bar has dimensions <large> x <long>
    Then the minimum breaks is <breaks>

    Examples:
      | large | long | breaks |
      | 5     | 5    | 24     |
      | 7     | 4    | 27     |
      | 1     | 1    | 0      |
      | 6     | 1    | 5      |
      | 9     | 13   | 116    |
