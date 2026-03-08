const expressionEl = document.getElementById('expression');
const resultEl = document.getElementById('result');
const buttons = document.querySelector('.buttons');

let expression = '';
let justEvaluated = false;

function updateScreen() {
  expressionEl.textContent = expression || '0';
  resultEl.textContent = getPreview(expression);
}

function sanitizeExpression(exp) {
  return exp
    .replace(/×/g, '*')
    .replace(/÷/g, '/')
    .replace(/−/g, '-')
    .replace(/%/g, '/100');
}

function isOperator(char) {
  return ['+', '-', '×', '÷', '−'].includes(char);
}

function getPreview(exp) {
  if (!exp) return '0';

  const lastChar = exp.slice(-1);
  if (isOperator(lastChar) || lastChar === '(' || lastChar === '.') {
    return '0';
  }

  try {
    const safeExp = sanitizeExpression(exp);
    const value = Function(`"use strict"; return (${safeExp})`)();

    if (!Number.isFinite(value)) return 'Error';
    return formatNumber(value);
  } catch {
    return '0';
  }
}

function formatNumber(value) {
  if (Number.isInteger(value)) return String(value);
  return String(parseFloat(value.toFixed(10)));
}

function appendValue(value) {
  if (justEvaluated && /[0-9.]/.test(value)) {
    expression = '';
  }

  if (value === '.') {
    const currentChunk = expression.split(/[+\-×÷()]/).pop();
    if (currentChunk.includes('.')) return;
    if (!currentChunk) {
      expression += '0.';
      justEvaluated = false;
      updateScreen();
      return;
    }
  }

  if (isOperator(value)) {
    if (!expression && value !== '-') return;

    const lastChar = expression.slice(-1);
    if (isOperator(lastChar)) {
      expression = expression.slice(0, -1) + value;
      justEvaluated = false;
      updateScreen();
      return;
    }
  }

  expression += value;
  justEvaluated = false;
  updateScreen();
}

function clearAll() {
  expression = '';
  justEvaluated = false;
  updateScreen();
}

function backspace() {
  if (justEvaluated) {
    clearAll();
    return;
  }

  expression = expression.slice(0, -1);
  updateScreen();
}

function addParenthesis() {
  const openCount = (expression.match(/\(/g) || []).length;
  const closeCount = (expression.match(/\)/g) || []).length;
  const lastChar = expression.slice(-1);

  if (!expression || isOperator(lastChar) || lastChar === '(') {
    expression += '(';
  } else if (openCount > closeCount) {
    expression += ')';
  } else {
    expression += '×(';
  }

  justEvaluated = false;
  updateScreen();
}

function applyPercent() {
  if (!expression) return;

  const match = expression.match(/(\d*\.?\d+)$/);
  if (!match) return;

  const number = parseFloat(match[1]) / 100;
  expression = expression.slice(0, -match[1].length) + formatNumber(number);
  justEvaluated = false;
  updateScreen();
}

function evaluateExpression() {
  if (!expression) return;

  try {
    const safeExp = sanitizeExpression(expression);
    const value = Function(`"use strict"; return (${safeExp})`)();
    if (!Number.isFinite(value)) throw new Error('Invalid');

    expression = formatNumber(value);
    justEvaluated = true;
    updateScreen();
  } catch {
    resultEl.textContent = 'Error';
  }
}

buttons.addEventListener('click', (event) => {
  const button = event.target.closest('button');
  if (!button) return;

  const { action, value } = button.dataset;

  if (action === 'clear') clearAll();
  else if (action === 'backspace') backspace();
  else if (action === 'paren') addParenthesis();
  else if (action === 'percent') applyPercent();
  else if (action === 'equals') evaluateExpression();
  else if (value) appendValue(value);
});

updateScreen();
