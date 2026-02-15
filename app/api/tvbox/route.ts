import { NextRequest } from 'next/server';

export async function GET(request: NextRequest) {
  const host = request.headers.get('host');
  const proto = request.headers.get('x-forwarded-proto') || 'https';
  const site = `${proto}://${host}`;

  const tvbox = {
    "wallpaper": "",
    "spider": "",
    "sites": [
      {
        "key": "my_kvideo",
        "name": "我的KVideo",
        "type": 3,
        "api": `${site}/api/`,
        "searchable": 1,
        "quickSearch": 1
      }
    ],
    "lives": []
  };

  return new Response(JSON.stringify(tvbox, null, 2), {
    status: 200,
    headers: {
      'Content-Type': 'application/json; charset=utf-8',
      'Cache-Control': 'max-age=600'
    }
  });
}

export const dynamic = 'force-dynamic';
